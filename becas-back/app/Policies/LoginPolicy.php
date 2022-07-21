<?php

namespace App\Policies;

use App\Models\Alumno;
use App\Models\login;
use Illuminate\Auth\Access\HandlesAuthorization;

class LoginPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Alumno $alumno)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Alumno  $alumno
     * @param  \App\Models\login  $login
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Alumno $alumno, login $login)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Alumno $alumno)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Alumno  $alumno
     * @param  \App\Models\login  $login
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Alumno $alumno, login $login)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Alumno  $alumno
     * @param  \App\Models\login  $login
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Alumno $alumno, login $login)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Alumno  $alumno
     * @param  \App\Models\login  $login
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Alumno $alumno, login $login)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Alumno  $alumno
     * @param  \App\Models\login  $login
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Alumno $alumno, login $login)
    {
        //
    }
}
