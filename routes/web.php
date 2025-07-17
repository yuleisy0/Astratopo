<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\PasswordRecoveryController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;





//Landing
Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::get('/contactanos', function () {
    return view('Landing/Contactanos');
})->name('contactanos');

Route::get('/galeria', function () {
    return view('Landing/Galeria');
})->name('galeria');

Route::get('/servicios', function () {
    return view('Landing/Servicios');
})->name('servicios');

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');

//Login
Route::get('/login', function () {
    return view('Login/Index');
})->name('login');


Route::get('/recuperarcontrasena', function () {
    return view('Login.RecuperarContrasena');
})->name('recuperarcontrasena');

Route::get('/verificarcodigo', function (Request $request) {
    $email = $request->query('email');
    if (!$email) {
        return redirect()->route('recuperarcontrasena')->with('error', 'Debe ingresar su correo primero.');
    }
    return view('Login.VerificarCodigo', ['email' => $email]);
})->name('verificarcodigo');

Route::get('/nuevacontrasena', function (Request $request) {
    $email = $request->query('email');
    if (!$email) {
        return redirect()->route('recuperarcontrasena')->with('error', 'Acceso no autorizado.');
    }
    return view('Login.NuevaContrasena', ['email' => $email]);
})->name('nuevacontrasena');


Route::post('/enviar-codigo', [PasswordResetController::class, 'enviarCodigo'])->name('enviar.codigo');
Route::post('/validar-codigo', [PasswordResetController::class, 'validarCodigo'])->name('validar.codigo');
Route::post('/guardar-nueva-contrasena', [PasswordResetController::class, 'guardarNuevaContrasena'])->name('guardar.nueva.contrasena');



//proteccion

Route::post('/login', [AuthController::class, 'login']);
Route::get('/panel', [AuthController::class, 'dashboard'])->middleware('auth')->name('panel');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::get('/editnosotros/{id}', [NosotrosController::class, 'edit'])
    ->middleware('auth')
    ->name('editnosotros');

Route::put('/editnosotros/{id}', [NosotrosController::class, 'update'])
    ->middleware('auth')
    ->name('editnosotros.update');  // ¡Nombre diferente al anterior!


Route::get('/editinicio/{id}', [InicioController::class, 'edit'])
    ->middleware('auth')
    ->name('editinicio');

Route::put('/editinicio/{id}', [InicioController::class, 'update'])
    ->middleware('auth')
    ->name('editinicio.update');

