<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransferenciaController extends Controller
{
    public function show(){

        return view('transferencia-bancaria');
    }
    public function create(Request $request){
        //receber agencia e conta do destinatario
        //buscar a conta no banco que corresponde
        //criar um objeto de transferencia bancaria
        //salvar no banco
        
    }
}
