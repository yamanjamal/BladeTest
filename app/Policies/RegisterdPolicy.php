<?php

namespace App\Policies;

use App\Models\Registerd;
use App\Models\User;
use Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class RegisterdPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return Gate::allows('registerd_access');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Registerd  $registerd
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Registerd $registerd)
    {
        return Gate::allows('registerd_show');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return Gate::allows('registerd_create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Registerd  $registerd
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Registerd $registerd)
    {
        return Gate::allows('registerd_update');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Registerd  $registerd
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Registerd $registerd)
    {
        return Gate::allows('registerd_delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Registerd  $registerd
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Registerd $registerd)
    {
        return Gate::allows('registerd_restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Registerd  $registerd
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Registerd $registerd)
    {
        return Gate::allows('registerd_forcedelete');
    }
}
