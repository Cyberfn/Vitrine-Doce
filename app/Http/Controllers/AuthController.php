<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authCheck()
    {
        if (Auth::check()) {
            return response()->json([
                'auth' => true,
                'user' => Auth::user()
            ]);
        }

        return response()->json(['auth' => false]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'senha');
        $user = Usuario::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['senha'], $user->senha)) {
            Auth::login($user);

            // Se usar HTML puro, salve a sessão manualmente para exibir erro
            session_start();
            unset($_SESSION['erro']);

            return redirect('/');
        }

        // Armazena o erro na sessão para exibir na view PHP
        session_start();
        $_SESSION['erro'] = 'Credenciais inválidas.';

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
