<?php

namespace App\Http\Controllers\api;


use App\Models\Transaction;
use App\Models\User;
use Orion\Http\Controllers\Controller;
use Orion\Http\Controllers\RelationController;

class UserTransactionController extends RelationController
{

    //protected $model = Transaction::class;
    protected $model = User::class;

    protected $relation = 'transactions';

    public function userTransactions($user)
    {
        $transactions = User::find($user)->transactions()->get();
        return response()->json([
            "data" => $transactions
        ], 201);

    }
}
