<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


//Landing
Route::get('/', function () {
    return view('Landing/Inicio');
})->name('inicio');;
Route::get('/nosotros', function () {
    return view('Landing/Nosotros');
})->name('nosotros');

Route::get('/contactanos', function () {
    return view('Landing/Contactanos');
})->name('contactanos');

Route::get('/galeria', function () {
    return view('Landing/Galeria');
})->name('galeria');

Route::get('/servicios', function () {
    return view('Landing/Servicios');
})->name('servicios');

//Login
Route::get('/login', function () {
    return view('Login/Index');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/panel', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');