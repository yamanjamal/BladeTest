<?php

namespace App\Policies;

use App\Models\Invited;
use App\Models\User;
use Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvitedPolicy
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
        return Gate::allows('invited_access');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Invited $invited)
    {
        return Gate::allows('invited_show');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return Gate::allows('invited_create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Invited $invited)
    {
        return Gate::allows('invited_update');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Invited $invited)
    {
        return Gate::allows('invited_delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Invited $invited)
    {
        return Gate::allows('invited_restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Invited $invited)
    {
        return Gate::allows('invited_forcedelete');
    }
}
