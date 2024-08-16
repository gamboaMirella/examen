<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function servicios() {
        return view('servicios');
    }

    public function proyectos() {
        return view('proyectos');
    }

    public function blog() {
        return view('blog');
    }

    public function contacto() {
        return view('contacto');
    }
}
