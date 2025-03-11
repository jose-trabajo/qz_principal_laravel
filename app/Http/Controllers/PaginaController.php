<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('/prueba/inicio');
    }
    public function acerca()
    {
        return view('/prueba/acerca');
    }
    public function contacto()
    {
        return view('/prueba/contacto');
    }
    public function uno()
    {
        return view('primero');
    }
    public function dos()
    {
        return view('segundo');
    }
}
