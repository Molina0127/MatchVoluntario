<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Ong;
use App\Models\Categoria;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
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
            'datanasc' => $request-> datanasc,
            'cpf' => $request-> cpf,
            'password' => $request-> senha
        ]);
        return view('home');
    }
    public function show(){
            $ong_id = Auth::guard('ong')->user()->id;
            $usuarios = Usuario::select(

                "usuarios.nome", 
    
                "usuarios.sobrenome",
    
                "usuarios.email", 
    
                "usuarios.datanasc",
    
                "usuarios.cpf",
    
    
            )
    
            ->join("categoria_usuario", "categoria_usuario.usuario_id", "=", "usuarios.id")
            ->join("categoria_ong", "categoria_ong.categoria_id", "=", "categoria_usuario.categoria_id")
            ->where("categoria_ong.ong_id","=", $ong_id)
            ->get();
        return view('site.ongs.HomeOng', ['usuarios'=> $usuarios]);
    }
    public function destroy($id){
        $usuario = Usuario:: findOrFail($id);
        $usuario->delete();
        return "Usuario excluido com sucesso";
    }
    public function edit($id){
        $usuario = Usuario:: findOrFail($id);
        return view ('site\usuarios\edit', ['usuario'=> $usuario]);
    }
    public function update(Request $request, $id){
        $usuario = Usuario:: findOrFail($id);
        $usuario->update([
            'email' => $request -> email

        ], [
            $request->validate([
                'email' => '|unique:usuarios|email' 
            ])    
        ]);
        return "Usuario atualizado com sucesso";
    }   
    public function save(Request $request){
        $request->validate([
            'nome' => 'required|alpha|max:45',
            'sobrenome'=>'required|alpha|max:60',
            'email' => 'required|unique:usuarios', 'email', 'max:255',
            'datanasc'=>'required|date',
            'cpf'=> 'required|cpf|formato_cpf|unique:usuarios','string',
            'password' => [
                'required','string',
                Password::min(8)->letters()->numbers()->mixedCase()->symbols()
                
            ],
            
        ],[
            'nome.required' => 'Nome é obrigatório',
            'sobrenome.required' => 'Sobrenome é obrigatório',
            'email.required' => 'E-mail é obrigatório',
            'datanasc.required'=>'Data de nascimento é obrigatório',
            'cpf.required' => 'CPF é obrigatório',
            'password.required' => 'Senha é obrigatória'

        ]);

        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->sobrenome = $request->sobrenome;
        $usuario->email = $request->email;
        $usuario->datanasc = $request->datanasc;
        $usuario->cpf = $request->cpf;
        $usuario->password = Hash:: make ($request->password);
        $save = $usuario->save();
        $usuario->categorias()->sync($request->categoria_id, false);

        if($save){
            return 'Cadastrado concluído com sucesso';
        }else {
            return 'O cadastro não pode ser concluído com sucesso';
        }

    }
    public function logout(){
        Auth::logout();
        return view('site.usuarios.index');
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
}