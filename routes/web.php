<?php

// use App\Http\Controllers\IndexController;
// use App\Http\Controllers\CreateController;
// use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index',[IndexController::class, 'index'])->name("profil");
// Route::get('/create',[CreateController::class, 'create'])->name("create");
// Route::post('/store',[StoreController::class, 'store'])->name("store");

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/create', [ProfilController::class, 'create'])->name('create');
Route::post('/store', [ProfilController::class, 'store'])->name('store');
Route::get("/profil/{profil}",[ProfilController::class, 'edit'])->name('edit');
Route::put("/profil/{profil}",[ProfilController::class, 'update'])->name('update');
Route::delete("/profil/{profil}",[ProfilController::class, 'destroy'])->name('destroy');