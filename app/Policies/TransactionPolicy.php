<?php

namespace App\Policies;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransactionPolicy
{
    use HandlesAuthorization;


    public function __construct()
    {
        //
    }

    public function update()
    {
        return true;
    }


    public function create()
    {
        return true;
    }

    public function delete()
    {
        return true;
    }

    public function forceDelete()
    {
        return true;
    }


    public function viewAny(User $user)
    {

        return true;
    }


    public function view(User $user, Transaction $transaction)
    {
        return true;
    }

    public function restore()
    {
        return true;
    }


}
