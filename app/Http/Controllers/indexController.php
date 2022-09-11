<?php

namespace App\Http\Controllers;

use App\Models\Entidade;
use App\Models\EntidadeVolunteer;
use App\Models\Usuario;
use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function entidade($id){
       $user_requested = Auth::user()->id;
       $acceptor = $id;
       $entidade = new Entidade();
       $entidade->user_requested = $user_requested;
       $entidade->acceptor = $acceptor;
       $entidade->save();
       return back()->with('addent', 'Pedido enviado');
    }
    public function delentidade($id){
        $dele = DB::table('entidades')->where('acceptor', $id)->delete();
        return back()->with('delent', 'Você não enviou nenhum pedido');
    }
    public function showRequests(){
        $ong_logada = Auth::guard('ong')->user();
        if(!$ong_logada){
            return view('site.ongs.login');
        }else{
                $showRequests = DB::table('entidades')
            ->leftJoin('usuarios', 'usuarios.id', 'entidades.user_requested')
            ->where('status',null)->get();

                return view('site.ongs.showRequests')->with('show', $showRequests);
        }
        
    }
    public function AcceptRequest($id){
        
        $update = DB::table('entidades')
        ->where('user_requested',$id)
        ->update(array('status'=> 1));

        $ong = Auth::guard('ong')->user();

        $ong->usuarios()->attach($id);
 
        $usuario = Usuario::findOrFail($id);

        return back();
        
    }
    public function DeleteRequest($id){
        $del = DB::table('entidades')
        ->where('user_requested',$id)
        ->delete();
        return back()->with('delRequest', 'Pedido removido');
    }
    public function entidadeVol($id){
        $ong_requested = Auth::guard('ong')->user()->id;
        $vol_acceptor = $id;
        $entidadeVol = new EntidadeVolunteer;
        $entidadeVol->ong_requested = $ong_requested;
        $entidadeVol->vol_acceptor = $vol_acceptor;
        $entidadeVol->save();
        return back()->with('addVol', 'Pedido enviado');
    }
    public function delentidadeVol($id){
        $del = DB::table('entidade_volunteers')->where('vol_acceptor', $id)->delete();
        return back()->with('delVol', 'Você nao enviou nenhum pedido');
    }
    public function showVolRequets(){
        $showVolRequests = DB::table('entidade_volunteers')
        ->leftJoin('ongs', 'ongs.id', 'entidade_volunteers.ong_requested')
        ->where('reqstatus',null)->get();

        return view('site.usuarios.showVolRequests')->with('showVol', $showVolRequests);

    }
    public function AcceptOngRequest($id){
        $update = DB::table('entidade_volunteers')
        ->where('ong_requested',$id)
        ->update(array('reqstatus'=> 1));

        $usuario = Auth::user();

        $usuario->ongs()->attach($id);

        $ong = Ong:: findOrFail($id);

        return back();
    }
    public function DeleteOngRequest($id){
        $delete = DB::table('entidade_volunteers')
        ->where('ong_requested',$id)
        ->delete();
        return back()->with('delVolRequest', 'Pedido removido');
    }
}
