<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrenamientosController extends Controller
{
    public function index()
    {
        return view('Entrenamiento/entrenamientos');
    }
}
