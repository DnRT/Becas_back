<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\beca_talento;
use App\Models\Login;

class BecaTalentoPolicy
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
     * @param  \App\Models\beca_talento  $becaTalento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Login $login, beca_talento $becaTalento)
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
     * @param  \App\Models\beca_talento  $becaTalento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Login $login, beca_talento $becaTalento)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Login  $login
     * @param  \App\Models\beca_talento  $becaTalento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Login $login, beca_talento $becaTalento)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Login  $login
     * @param  \App\Models\beca_talento  $becaTalento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Login $login, beca_talento $becaTalento)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Login  $login
     * @param  \App\Models\beca_talento  $becaTalento
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Login $login, beca_talento $becaTalento)
    {
        //
    }
}
