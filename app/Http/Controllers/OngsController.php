<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Ong;

class OngsController extends Controller
{
    public function create() {
        return view('site.ongs.create');
    }
    public function store(Request $request) {
        $cnpj_api_response = Http::get('https://publica.cnpj.ws/cnpj/'. $request->cnpj);

        if (isset ($cnpj_api_response['status']) && $cnpj_api_response['status'] != 200){
            return 'CNPJ inválido';
        }

        if ($cnpj_api_response['estabelecimento']['situacao_cadastral'] != "Ativa"){
            return 'CNPJ inativo';
        }
        
        Ong::create([
            'cnpj'=>$request->cnpj,
            'nome'=>$request->nome,
            'proprietario'=>$request->proprietario,
        ]);
        return "Ong salva com sucesso";
    }
    public function show(){
        $ongs = Ong::all();
        return view('site.ongs.show', ['ongs' => $ongs]);
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
            'cnpj'=> $request -> cnpj,
            'nome'=> $request -> nome,
            'proprietario'=> $request -> proprietario,
        ]);
        return 'Ong atualizada com sucesso';
    }
    
}
