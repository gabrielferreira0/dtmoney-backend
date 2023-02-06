<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserEGAPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [


    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
