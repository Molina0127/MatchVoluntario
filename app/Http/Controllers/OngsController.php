<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Ong;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class OngsController extends Controller
{
    public function index() {
        return view('home');
    }

    public function create() {
        $categorias = Categoria::orderBy('categoria_name', 'ASC')->pluck('categoria_name', 'id');
        return view('site.ongs.create', compact('categorias'));
    }
    /*public function store(Request $request){
        $cnpj_api_response = Http::get('https://publica.cnpj.ws/cnpj/'. $request->cnpj);

        if (isset ($cnpj_api_response['status']) && $cnpj_api_response['status'] != 200){
            return 'CNPJ inválido';
        }

        if ($cnpj_api_response['estabelecimento']['situacao_cadastral'] != "Ativa"){
            return 'CNPJ inativo';
        }

        Ong::create([
            'cnpj'=>$request->cnpj,
            'ong_name'=>$request->ong_name,
            'owner'=>$request->owner,
        ]);
        return redirect('home');
    }*/
    public function store(Request $request){
        Ong::create([
            'cnpj' => $request-> cnpj,
            'ong_name' => $request-> ong_name,
            'owner' => $request-> owner,
            'description' => $request->description,
            'ong_city' => $request->ong_city,
            'ong_state' => $request->ong_state,
            'ong_cep' => $request->ong_name,
            'password' => $request->password
        ]);
        return view('home');
    }
    public function loginOng(){
        return view ('site.ongs.login');
    }
    public function save(Request $request){

        $request->validate([
            'cnpj'=>'required|cnpj|formato_cnpj|unique:ongs',
            'ong_name'=>'required|unique:ongs|max:255|string',
            'owner'=>'required|regex:/^[\p{L}\s-]+$/u|max:60',
            'description'=>'required|regex:/^[\p{L}\s-]+$/u|max:255',
            'ong_city'=>'required|regex:/^[\p{L}\s-]+$/u|max:60',
            'ong_state'=>'required|uf',
            'ong_cep'=>'required|formato_cep',
            'password' => [
                'required','string',
                Password::min(8)->letters()->numbers()->mixedCase()->symbols()
                
            ],
            
        ]);

        $ong = new Ong;
        $usuarios = Usuario::all();            
        $ong->cnpj = $request->cnpj;
        $ong->ong_name = $request->ong_name;
        $ong->owner = $request->owner;
        $ong->description = $request->description;
        $ong->ong_city = $request->ong_city;
        $ong->ong_state = $request->ong_state;
        $ong->ong_cep = $request->ong_name;
        $ong->password = Hash:: make ($request->password);
        $save = $ong->save();
        $ong->categorias()->sync($request->categoria_id, false); 

        if($save){
            return 'Cadastro concluído com sucesso';
        }else {
            return 'O cadastro não pode ser concluído com sucesso';
        }

    }
    public function logoutOng(){
       Auth::guard('ong')->logout();
       return view('site.usuarios.index');
    }
    
    
    public function show(){
        $user_id = Auth::user()->id;
        $ongs = Ong::select(

            "ongs.cnpj", 

            "ongs.ong_name",

            "ongs.description", 

            "ongs.ong_city",

            "ongs.ong_state",

            "ongs.ong_cep",

        )

        ->join("categoria_ong", "categoria_ong.ong_id", "=", "ongs.id")
        ->join("categoria_usuario", "categoria_usuario.categoria_id", "=", "categoria_ong.categoria_id")
        ->where("categoria_usuario.usuario_id","=", $user_id)
        ->get();
        /*$search = request('search');

        if($search){
            $ongs = Ong::where([
                ['description', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $ongs = Ong::all();
        }*/
        return view('home', ['ongs'=> $ongs]);
    }

    public function showOng($id){
        $ongs = Ong::findOrFail($id);
        $categoria = Categoria::findOrFail($id);
        return view('site/ongs/showOng', ['ongs' => $ongs, 'categoria' => $categoria]);
    }
    public function showUsuario($id){
        $usuarios = Usuario::findOrFail($id);
        return view('site/usuarios/showUsuario', ['usuarios' => $usuarios]);
    }
    public function destroy($id){
        $ong = Ong:: findOrFail($id);
        $ong->delete();
        return "Ong excluida com sucesso";
    }
    public function edit($id){
        $ong = Ong:: findOrFail($id);
        return view ('site.ongs.edit', ['ong'=> $ong]);
    }
    public function update(Request $request, $id){
        $ong = Ong:: findOrFail($id);
        $ong->update([
            'ong_name'=> $request -> ong_name,
            'owner' => $request -> owner,
            'ong_city' => $request -> ong_city,
            'ong_state' => $request -> ong_state,
        ]);
        return "Ong atualizada com sucesso";
    }
    public function dashboard(){
        $usuario = auth()->user();

        $ong = $usuario->ongs();

        $ongs = $usuario->ongs;

        return view('site.ongs.dashboard', ['ongs'=> $ong, 'ongs'=> $ongs], compact('usuario'));
    }
    public function dashboardOng(){
        $ong = Auth::guard('ong')->user();
        return view('site.usuarios.dashboard', compact('ong'));
    }

   public function joinOng($id){
    $usuario = auth()->user();

    $usuario->ongs()->attach($id);

    $ong = Ong:: findOrFail($id);

    return redirect('/dashboard')->with('msg', 'obrigado por fazer parte do nosso time!'.$ong->title);

   }
}