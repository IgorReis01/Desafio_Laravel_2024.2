<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendencias extends Model
{
    use HasFactory;
    protected $filable=[
        'titulo',
        'limite',
        'gerente_id',
        'transferencia_bancaria_id',
    ];
}
