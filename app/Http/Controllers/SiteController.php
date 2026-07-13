<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function dashboard(){
        $name = 'Leandro Henrique Arantes';
        $livros = ['php', 'laravel', 'python'];

        // Tem como usar esse método
        // return view('dashboard', [
        //     'name' => $name, 
        //     'livros' => $livros,
        // ]);

        return view('dashboard', compact('name', 'livros'));
    }
}
