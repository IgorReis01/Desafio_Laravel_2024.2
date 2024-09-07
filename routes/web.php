<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/login', function () {
    return view('auth.login');
});


    Route::get('/dashboard', function(){
//dd(Auth::user());
    return view('dashboard');
    })->name('dashboard');


Route::middleware('admin')->group (function() {
    Route::get('/dashboardAdmin', function(){
echo "dashboard do adm";
    })->name('admin.dashboard');
});

Route::middleware('gerente')->group (function() {
    Route::get('/dashboardGerente', function(){
echo "dashboard do gerente";
    })->name('gerentes.dashboard');
});


    Route::resource("/user", UserController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



require __DIR__.'/auth.php';

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
