<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\LoginHistory;
use Symfony\Component\HttpFoundation\Request;

class ClienteController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // Obtener el usuario actual
        $usuarioActual = auth()->user();
        $loginHistories = $usuarioActual->loginHistories()->orderBy('logged_in_at', 'desc')->get();

        // Obtener todos los usuarios
        $todos = Cliente::all();
//        $loginTodos = LoginHistory::all();



        return view('Cliente/sesiones', compact('usuarioActual', 'loginHistories', "todos"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
