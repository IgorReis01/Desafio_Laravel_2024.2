<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContaBancaria extends Model
{
    use HasFactory;
    protected $filable=[
        'agencia',
        'conta',
        'saldo',
        'limite_de_transferencia',
        'password',
    ];
}
