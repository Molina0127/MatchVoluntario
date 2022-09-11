<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Ong;
use App\Models\Categoria;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UsuariosController extends Controller
{
    public function index()
    {
        return view('site.usuarios.categoria');
    }

    public function create() {
        $categorias = Categoria::orderBy('categoria_name', 'ASC')->pluck('categoria_name', 'id');
        return view('site.usuarios.register', compact('categorias'));
    }

    public function store(Request $request){
        Usuario::create([
            'nome' => $request-> nome,
            'sobrenome' => $request-> sobrenome,
            'email' => $request-> email,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
            'datanasc' => $request-> datanasc,
            'cpf' => $request-> cpf,
            'password' => $request-> senha
        ]);
        return view('home');
    }
    public function show(){
        $ong_logada = Auth::guard('ong')->user();
        if(!$ong_logada){
            return view('site.ongs.login');
        }    
        $search = request('search');

            if($search){
                $usuarios = Usuario::where([
                    ['nome', 'like', '%'.$search.'%']
                ])->get();
            }else{
                $ong_id = Auth::guard('ong')->user()->id;
                $usuarios = Usuario::select(
    
                    "usuarios.*"
        
        
                )
        
                ->join("categoria_usuario", "categoria_usuario.usuario_id", "=", "usuarios.id")
                ->join("categoria_ong", "categoria_ong.categoria_id", "=", "categoria_usuario.categoria_id")
                ->where("categoria_ong.ong_id","=", $ong_id)
                ->get(); 
            }
        return view('site.ongs.HomeOng', ['usuarios'=> $usuarios]);
    }
    public function destroy($id){
        $usuario = Usuario:: findOrFail($id);
        $usuario->delete();
        Auth::logout();
        return view('site.usuarios.index');
    }
    public function edit($id){
        $usuario_logado_id = Auth::user()->id;
        
        if($usuario_logado_id == $id){
            $usuario = Usuario::find($id);
            return view('site\usuarios\edit', ['usuario'=> $usuario]);
        }else{
            return back()->with('notfound_user', 'Erro! id não pertencente ao usuário autenticado');
        }
        
        
                
        
        
    }
    public function update(Request $request, $id){
        if(!$usuario = Usuario::find($id))
        return back();

        $id = $this->id ?? '';
        
        $request->validate([
            'email' => 'required', "unique:usuarios,{$id},id", 'email', 'max:255',
            'password' => [
                'nullable','string',
                Password::min(8)->letters()->numbers()->mixedCase()->symbols()
                
            ],
        ]);
        

        $data = $request->only('email');
        if($request->password)
            $data['password'] = bcrypt($request->password);
        
        $usuario->update($data);

        return view('site.ongs.dashboard')->with('usuario', $usuario )->with('user_updtmsg', 'Usuário atualizado com sucesso');

    }   
    public function save(Request $request){
        $request->validate([
            'nome' => 'required|alpha|max:45',
            'sobrenome'=>'required|alpha|max:60',
            'email' => 'required|unique:usuarios', 'email', 'max:255',
            'cidade'=> 'required',
            'estado' => 'required',
            'cep' => 'required',
            'datanasc'=>'required|date',
            'cpf'=> 'required|cpf|formato_cpf|unique:usuarios','string',
            'password' => [
                'required','string',
                Password::min(8)->letters()->numbers()->mixedCase()->symbols()
                
            ],
            
        ]);

        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->sobrenome = $request->sobrenome;
        $usuario->email = $request->email;
        $usuario->cidade = $request->cidade;
        $usuario->estado = $request->estado;
        $usuario->cep = $request->cep;
        $usuario->datanasc = $request->datanasc;
        $usuario->cpf = $request->cpf;
        $usuario->password = Hash:: make ($request->password);
        $save = $usuario->save();
        $usuario->categorias()->sync($request->categoria_id, false);

        if($save){
            return back()->with('user_savemsg', 'Cadastro concluído com sucesso' );
        }else {
            return 'O cadastro não pode ser concluído com sucesso';
        }

    }
    public function logout(){
        Auth::logout();
        return view('site.usuarios.index');
    }
    public function volunteersparticipants(){
        $ong = Auth::guard('ong')->user();

        $usuario = $ong->usuarios();

        $usuarios = $ong->usuarios;


        return view('site.usuarios.showMyVolunteers', compact('ong', 'usuario', 'usuarios'));

       
    }
    
    public function dashboard(){
        $data = ['LoggedUserinfo'=>Usuario::where ('id', '=', session('LoggedUser'))->first()];
        return view('site.usuarios.dashboard', $data);
    }
    public function joinUsuario($id){
       $ong = Auth::guard('ong')->user();

       $ong->usuarios()->attach($id);

       $usuario = Usuario::findOrFail($id);

        return back()->with('msg', 'obrigado por fazer parte do nosso time!'.$usuario->title);

    }
    public function removeVolunteer($id){
        $ong = Auth::guard('ong')->user();
 
        $ong->usuarios()->detach($id);
 
        $usuario = Usuario::findOrFail($id);
 
         return back()->with('removeVol', 'Voluntário removido com sucesso'.$usuario->title);
 
     }
}