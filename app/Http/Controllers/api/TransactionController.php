<?php

namespace App\Http\Controllers\api;

use App\Models\Transaction;
use Orion\Http\Controllers\Controller;


class TransactionController extends Controller
{
    protected $model = Transaction::class;

}
