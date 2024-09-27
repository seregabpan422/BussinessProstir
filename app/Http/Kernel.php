<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $middleware = [
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Middleware\ValidateInput::class,
        \Illuminate\Middleware\TrimStrings::class,
        \Illuminate\Middleware\ConvertInput::class,
        \Illuminate\Middleware\Session::class,
        \Illuminate\Auth\Middleware\Authenticate::class,
        \Illuminate\Auth\Middleware\SetUser::class,
        \Illuminate\Middleware\CanAccessRoute::class,
        \Illuminate\Middleware\ShareErrors::class,
        \Illuminate\Middleware\RedirectIfUnauthenticated::class,
        \Illuminate\Middleware\XSSProtection::class,
        \Illuminate\Middleware\ReferrerPolicy::class,
        \Illuminate\Middleware\PWA::class,
        \App\Http\Middleware\ShareUser::class, // Your custom middleware
        \App\Http\Middleware\AdminUser::class

    ];

    /**
     * The application's route groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            $this->middleware,
            // ... Other middleware for web routes
        ],

        'api' => [
            // ... Middleware for API routes
        ],

        'adminUser' => [
            \App\Http\Middleware\AdminUser::class,
        ],
    ];

    /**
     * The application's route patterns.
     *
     * @var array
     */
    protected $routePatterns = [
        'admin' => 'admin/*',
        // ... Other route patterns
    ];

    /**
     * Define the application's service providers.
     *
     * @var array
     */
    protected $providers = [
        \App\Providers\App::class,
        \App\Providers\Auth::class,
        // ... Other service providers
    ];

    /**
     * The application's console commands.
     *
     * @var array
     */
    protected $commands = [
        // ... Your console commands
    ];

    /**
     * Boot the application's HTTP kernel.
     *
     * @return void
     */
    public function boot()
    {


        // ... Custom booting logic
    }
}
