<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\becas;
use App\Models\Login;

class BecasPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Login $login)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Login  $login
     * @param  \App\Models\becas  $becas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Login $login, becas $becas)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Login $login)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Login  $login
     * @param  \App\Models\becas  $becas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Login $login, becas $becas)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Login  $login
     * @param  \App\Models\becas  $becas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Login $login, becas $becas)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Login  $login
     * @param  \App\Models\becas  $becas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Login $login, becas $becas)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Login  $login
     * @param  \App\Models\becas  $becas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Login $login, becas $becas)
    {
        //
    }
}
