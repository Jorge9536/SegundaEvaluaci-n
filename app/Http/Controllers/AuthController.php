<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Mostrar formulario de login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Procesar el login - VALIDACIÓN MANUAL SIN LIBRERÍAS
     */
    public function login(Request $request)
    {
        // Validación manual de campos como pide el examen
        $errors = [];
        
        if (empty($request->usuario)) {
            $errors['usuario'] = 'El campo usuario es requerido';
        }
        
        if (empty($request->password)) {
            $errors['password'] = 'El campo contraseña es requerido';
        }
        
        if (!empty($errors)) {
            return back()->withErrors($errors)->withInput();
        }

        // Autenticación manual
        $credentials = [
            'email' => $request->usuario,
            'password' => $request->password
        ];

        // Para pruebas usamos credenciales fijas
        if ($request->usuario === 'admin' && $request->password === 'admin123') {
            // Crear sesión manualmente
            $request->session()->put('user_authenticated', true);
            $request->session()->put('user_name', $request->usuario);
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'usuario' => 'Credenciales incorrectas. Use: admin / admin123',
        ]);
    }

    /**
     * Cerrar sesión
     */
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}