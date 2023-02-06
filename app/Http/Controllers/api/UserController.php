<?php

namespace App\Http\Controllers\api;

use App\Models\Transaction;
use App\Models\User;
use Orion\Http\Controllers\Controller;


class UserController extends Controller
{
    protected $model = User::class;

}
