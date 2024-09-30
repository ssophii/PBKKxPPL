<?php

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
Route::get('/create', function () {
    return view('create');
});

route::get('/index', [App\Http\Controllers\IndexController::class, 'index']);
route::get('/dashboard', [App\Http\Controllers\LandingPageController::class, 'index']);
route::post('/store', [App\Http\Controllers\CreateController::class, 'store']);
