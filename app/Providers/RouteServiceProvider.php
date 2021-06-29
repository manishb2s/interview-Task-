<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     *
     * @noinspection ReturnTypeCanBeDeclaredInspection
     */
    public function boot()
    {
        $this->routes(function () {
            Route::middleware('web')->group(base_path('routes/web.php'));
            Route::prefix('api')->group(base_path('routes/api.php'));
        });
    }
}
