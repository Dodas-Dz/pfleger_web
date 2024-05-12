<?php

namespace App\Providers;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

// use Illuminate\Support\Facades\Gate;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();

        /* define a admin user role */
        Gate::define('istPDL', function($user) {
           return $user->role == 'PDL';
        });

        /* define a user role */
        Gate::define('istPflegerFachkraft', function($user) {
            return $user->role == 'PflegerFachkraft';
        });
        Gate::define('istAzubi', function($user) {
            return $user->role == 'Azubi';
        });
        Gate::define('isBoth', function($user) {
            if($user->role == 'Azubi' || $user->role == 'PflegerFachkraft' || $user->role == 'PDL')
            return true;
        });
    }
}
