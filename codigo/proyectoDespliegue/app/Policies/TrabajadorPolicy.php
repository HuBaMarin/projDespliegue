<?php

namespace App\Policies;

use App\Models\Trabajador;
use App\Models\Cliente;
use Illuminate\Auth\Access\Response;

class TrabajadorPolicy
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
    public function view(Cliente $user, Trabajador $trabajador): bool
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
    public function update(Cliente $user, Trabajador $trabajador): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Cliente $user, Trabajador $trabajador): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Cliente $user, Trabajador $trabajador): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Cliente $user, Trabajador $trabajador): bool
    {
        //
    }
}
