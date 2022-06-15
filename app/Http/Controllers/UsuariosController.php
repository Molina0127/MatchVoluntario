<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 825d0f74beafa6bd44dc71841a56c4b8aea81b54
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function create() {
        return view('site.usuarios.register');
    }

    public function store(Request $request) {
        Usuario::create([
            'nome'=> $request-> nome,
            'sobrenome'=> $request-> sobrenome,
            'email'=> $request-> email,
            'datanasc'=> $request-> datanasc,
            'cpf'=> $request-> cpf,
            'senha'=> $request-> senha
        ]);
        return "Usuario";
    }

    // public function show() {
    //     $usuarios = Usuario::all();
    //     return view('', ['' => $usuarios])
    // }

    public function destroy($id){
        $usuario = Usuario::findOrFail($id);
        $usuario -> delete();
        return "Usuario deletado por sucesso";
    }
    
    public function edit($id){
        $usuario = Uusario::findOrFail($id);
        return view('', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id){
        $usuario = Usuario::findOrFail($id);
        $usuario->update([
            'nome'=> $request-> nome,
            'sobrenome'=> $request-> sobrenome,
            'email'=> $request-> email,
            'datanasc'=> $request-> datanasc,
            'cpf'=> $request-> cpf,
            'senha'=> $request-> senha
        ]);
        return "Usuario atualizado";
    }
}
