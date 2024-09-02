<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;
    protected $filable=[
        'valor',
        'divida',
        'conta_bancaria_id',
        'aprovado',
        'gerente_id',
        'gerente_conta_bancaria_id',
    ];
}
