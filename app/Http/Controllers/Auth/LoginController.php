<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

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
