<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Models\Ong;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(){
        if(Auth::user()){
            $user_id = Auth::user()->id;
            $ongs = Ong::select(

                "ongs.*"
    
            )
    
            ->join("categoria_ong", "categoria_ong.ong_id", "=", "ongs.id")
            ->join("categoria_usuario", "categoria_usuario.categoria_id", "=", "categoria_ong.categoria_id")
            ->where("categoria_usuario.usuario_id","=", $user_id)
            ->get();
            return view('home', compact('ongs'));
        }else {
            return view ('site.usuarios.login');
        }
    }
    public function auth(Request $request){
        $credentials = $request->validate([
            'email'=>'required',
            'password' => [
                'required','string',
                Password::min(8)->letters()->numbers()->mixedCase()->symbols()
                
            ],
            
            
        ],[
            'email.required'=> 'E-mail é obrigatório',
            'password.required'=> 'Senha é obrigatória'
        ]);
        if(Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            
            $user_id = Auth::user()->id;
            $ongs = Ong::select(

                "ongs.*"
    
            )
    
            ->join("categoria_ong", "categoria_ong.ong_id", "=", "ongs.id")
            ->join("categoria_usuario", "categoria_usuario.categoria_id", "=", "categoria_ong.categoria_id")
            ->where("categoria_usuario.usuario_id","=", $user_id)
            ->get();
            return view('home', compact('ongs'));
        
        } else{
            return back()->with('fail', 'E-mail ou senha inválida');
        }
    }
    public function loginOng(){
        if(Auth::guard('ong')->check()){
            $ong_id = Auth::guard('ong')->user()->id;
            $usuarios = Usuario::select(

                "usuarios.*"
    
    
            )
    
            ->join("categoria_usuario", "categoria_usuario.usuario_id", "=", "usuarios.id")
            ->join("categoria_ong", "categoria_ong.categoria_id", "=", "categoria_usuario.categoria_id")
            ->where("categoria_ong.ong_id","=", $ong_id)
            ->get();
            return view('site.ongs.homeOng', compact('usuarios'));
        } else {
            return view ('site.ongs.login');
        }
    }
    public function authOng(Request $request){
        $credentials = $request->validate([
            'ong_name'=>'required',
            'password' => [
                'required','string',
                Password::min(8)->letters()->numbers()->mixedCase()->symbols()
                
            ],
            
            
        ],[
            'ong_name.required'=> 'Nome da Ong é obrigatório',
            'password.required'=> 'Senha é obrigatória'
        ]);
        if(Auth::guard('ong')->attempt($credentials)){
            $request->session()->regenerate();
            
            $ong_id = Auth::guard('ong')->user()->id;
            $usuarios = Usuario::select(

                "usuarios.*"
    
            )
    
            ->join("categoria_usuario", "categoria_usuario.usuario_id", "=", "usuarios.id")
            ->join("categoria_ong", "categoria_ong.categoria_id", "=", "categoria_usuario.categoria_id")
            ->where("categoria_ong.ong_id","=", $ong_id)
            ->get();
            return view('site.ongs.homeOng', compact('usuarios'));
        
        } else{
            return back()->with('fail', 'Nome da Ong ou senha inválida');
        }
        
           
    }
    
}
