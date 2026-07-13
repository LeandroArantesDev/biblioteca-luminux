<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
           'email' => 'required|string|email',
           'password' => 'required|string|min:6',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('site.dashboard'));
        } else {
            return back()->withErrors([
                'email' => 'Email Incorreto.',
                'password' => 'Senha Incorreta.',
            ]);
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        // Acessando a função de deslogar usuário
        Auth::logout();

        // Invalidando a sessão
        $request->session()->invalidate();

        // Regenerando o token de sessão
        $request->session()->regenerateToken();

        // Redirecionando para a homepage
        return redirect()->intended(route('site.home'));
    }
}
