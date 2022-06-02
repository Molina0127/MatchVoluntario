<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ong;

class OngsController extends Controller
{
    public function create() {
        return view('ongs.create');
    }
    public function store(Request $request) {
        Ong::create([
            'cnpj'=>$request->cnpj,
            'nome'=>$request->nome,
            'proprietario'=>$request->proprietario,
        ]);
        return "Ong salva com sucesso";
    }
    public function show(){
        $ongs = Ong::all();
        return view('ongs.todos', ['ongs' => $ongs]);
    }
    public function destroy($id){
        $ong = Ong:: findOrFail($id);
        $ong->delete();
        return "Ong excluida com sucesso";
    }
    public function edit($id){
        $ong = Ong:: findOrFail($id);
        return view ('ongs.editar', ['ong'=> $ong]);
    }
    public function update(Request $request, $id){
        $ong = Ong:: findOrFail($id);
        $ong->update([
            'cnpj'=> $request -> cnpj,
            'nome'=> $request -> nome,
            'proprietario'=> $request -> proprietario,
        ]);
        return 'Ong atualizada com sucesso';
    }
    
}
