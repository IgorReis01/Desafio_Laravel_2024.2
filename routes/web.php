<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('admin')->group (function() {
    Route::get('/dashboardAdmin', function(){
echo "dashboard do adm";
    })->name('admin.dashboard');
});

Route::middleware('gerente')->group (function() {
    Route::get('/dashboardGerente', function(){
echo "dashboard do gerente";
    })->name('gerente.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::resource("/user", UserController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
