<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illiminate\Support\Facades\View;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $cnpj = Http::get('https://publica.cnpj.ws/cnpj/27865757000102');

        return $cnpj['estabelecimento']['situacao_cadastral'];

        $estabelecimento = $cnpj['estabelecimento'];

        $situacaoCad = $estabelecimento['situacao_cadastral']; 

        // return $situacaoCad;

        // if ($situacaoCad !== 'Ativa'){
        //     return "Cnpj desativado";
        // }
        // else {
        //     return "Cnpj em situação cadastral ativada";
        // }
        //return View::make('site.usuarios.register', ['name' => 'John']);
    }

}   
