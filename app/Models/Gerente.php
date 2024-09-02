<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{
    use HasFactory;
    protected $filable=[
        'name',
        'email',
        'password',
        'telefone',
        'data_de_nascimento',
        'cpf',
        'foto_de_perfil',
        'endereco',
        'conta_bancaria_id',
    ];
}
