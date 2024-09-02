<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $filable=[
            
        'country',
        'state',
        'city',
        'street',
        'building_number',
        'postcode',

        
    ];
}
