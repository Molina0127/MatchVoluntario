<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.usuarios.categoria');
    }
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request){
        Usuario::create([
            'nome' => $request-> nome,
            'sobrenome' => $request-> sobrenome,
            'email' => $request-> email,
            'datanasc' => $request-> datanasc,
            'cpf' => $request-> cpf,
            'senha' => $request-> senha
        ]);
        return 'Usuario criado com sucesso';

    }
    public function show(){
        $usuarios = Usuario::get();
        return view('site.usuarios.show', ['usuarios'=> $usuarios]);
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
            'nome'=> $request -> nome,
            'sobrenome'=> $request -> sobrenome,
            'email' => $request -> email,
            'datanasc'=>$request -> datanasc,
            'cpf'=>$request -> cpf,
            'senha'=>$request -> senha,

        ]);
        return "Usuario atualizado com sucesso";
    }
}
