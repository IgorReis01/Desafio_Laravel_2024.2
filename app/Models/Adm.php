<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adm extends Model
{
    use HasFactory;
    protected $filable=[
        'name',
        'email',
        'password',
        'endereco',
        'telefone',
        'data_de_nascimento',
        'cpf',
        'foto_de_perfil',
        'adm_id',
    ];
}
