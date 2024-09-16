<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gerente;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        
        //..retorna a view index passando a variável $user
        return view('admin.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gerentes=Gerente::all();
        
        return view('admin.user.create')->with('gerentes', $gerentes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $user=new User();
        $user->gerente_id=$request->input('gerente_id');
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->endereco=$request->input('endereco');
        $user->telefone=$request->input('telefone');
        $user->data_de_nascimento=$request->input('data_de_nascimento');
        $user->cpf=$request->input('cpf');
        $user->password=$request->input('password');
        $user->foto_de_perfil='img';
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::find($id);
        $gerentes=Gerente::all();
       

        return view('admin.user.visualizar')->with('user', $user)->with('gerentes', $gerentes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        $gerentes=Gerente::all();

        return view('admin.user.edit')->with('user', $user)->with('gerentes', $gerentes);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}

