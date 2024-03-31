<?php

namespace App\Policies;

use App\Models\Cliente;
use App\Models\cliente;
use Illuminate\Auth\Access\Response;

class ClientePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Cliente $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Cliente $user, cliente $cliente): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Cliente $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Cliente $user, cliente $cliente): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Cliente $user, cliente $cliente): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Cliente $user, cliente $cliente): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Cliente $user, cliente $cliente): bool
    {
        //
    }
}
