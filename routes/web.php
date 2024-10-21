<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/create', [ProfilController::class, 'create'])->name('create');
Route::post('/store', [ProfilController::class, 'store'])->name('store');
Route::get("/profil/{profil}",[ProfilController::class, 'edit'])->name('edit');
Route::put("/profil/{profil}",[ProfilController::class, 'update'])->name('update');
Route::delete("/profil/{profil}",[ProfilController::class, 'destroy'])->name('destroy');

