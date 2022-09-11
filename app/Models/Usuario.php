<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Ong;

class Usuario extends Authenticatable
{
    use HasFactory;
    use \Illuminate\Notifications\Notifiable;

    protected $fillable = ['nome', 'sobrenome', 'email', 'cidade', 'estado', 'cep', 'datanasc', 'cpf', 'password'];

    public function categorias(){
        return $this->belongsToMany(Categoria::class);
    }
    public function ongs(){
        return $this->belongsToMany(Ong::class);
    }
}