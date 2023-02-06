<?php

namespace App\Policies;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return true;
    }


    public function view(User $user)
    {
        return true;
    }


    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Transaction $transaction)
    {
        return true;
    }

    public function delete(User $user, Transaction $transaction)
    {
        return true;
    }

    public function restore(User $user, Transaction $transaction)
    {
        return true;
    }


    public function forceDelete(User $user, Transaction $transaction)
    {
        return true;
    }


}
