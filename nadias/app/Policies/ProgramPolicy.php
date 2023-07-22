<?php

namespace App\Policies;

use App\Models\Program;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ProgramPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability): bool
    {
        // all the other methods will resolve to true for admins
        if ($user->is_admin) { 
            return true;
        } else { 
            return false;
        }
    }

    /**
     * Determine whether the user can manage programs.
     *
     * @param  \App\User  $user     
     * @return mixed
     * NOTE: are these other checks for admin necessary since I have already performed the check in the before function?
     */
    public function manage(User $user): bool
    {
        if ($user->is_admin) {
            return true;
        } else { 
            return false;
        }
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Program $program): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create programs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user): bool
    {
        if ($user->is_admin) {
            return true;
        } else { 
            return false;
        }
    }

    /**
     * Determine whether the user can update the category.
     *
     * @param  \App\User  $user
     * @param  \App\Program  $category
     * @return mixed
     */
    public function update(User $user, Program $program): bool
    {
        if ($user->is_admin) {
            return true;
        } else { 
            return false;
        }
    }

    /**
     * Determine whether the user can delete the category.
     *
     * @param  \App\User  $user
     * @param  \App\Program  $category
     * @return mixed
     */
    public function delete(User $user, Program $program): bool
    {
        if ($user->is_admin) {
            return true;
        } else { 
            return false;
        }
    }

    /**
     * Determine whether the user can restore the category.
     *
     * @param  \App\User  $user
     * @param  \App\Program  $category
     * @return mixed
     */
    public function restore(User $user, Program $program): bool
    {
        if ($user->is_admin) {
            return true;
        } else { 
            return false;
        }
    }

    /**
     * Determine whether the user can permanently delete the category.
     *
     * @param  \App\User  $user
     * @param  \App\Program  $category
     * @return mixed
     */
    public function forceDelete(User $user, Program $program): bool
    {
        if ($user->is_admin) {
            return true;
        } else { 
            return false;
        }
    }
}
