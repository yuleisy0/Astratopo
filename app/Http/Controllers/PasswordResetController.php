<?php

namespace App\Http\Controllers;

use App\Mail\CodigoRecuperacion;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    public function enviarCodigo(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:admins,email']);

        $codigo = rand(100000, 999999);

        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $codigo, 'created_at' => now()]
        );

        Mail::to($request->email)->send(new CodigoRecuperacion($codigo));

        return redirect()->route('verificarcodigo', ['email' => $request->email]);
    }


    public function validarCodigo(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'codigo' => 'required'
        ]);

        $registro = DB::table('password_resets')
            ->where('email', $request->email)
            ->where('token', $request->codigo)
            ->first();

        if ($registro && now()->diffInMinutes($registro->created_at) <= 10) {
            return redirect()->route('nuevacontrasena', ['email' => $request->email]);
        }

        return back()->withErrors(['codigo' => 'Código inválido o expirado']);
    }
    public function guardarNuevaContrasena(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        User::where('email', $request->email)
            ->update(['password' => bcrypt($request->password)]);

        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect()->route('login')->with('mensaje', 'Contraseña actualizada correctamente.');
    }
}
