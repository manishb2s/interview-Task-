<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [];

    /**
     *
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
