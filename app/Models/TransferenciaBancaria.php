<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferenciaBancaria extends Model
{
    use HasFactory;
    protected $filable=[
        'valor',
        'destinatario',
        'tipo',
        'remetente',

    ];
}
