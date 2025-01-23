<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        // Enregistrer les services ou autres dépendances ici
    }

    public function boot(): void
    {
        // Pas besoin d'appeler registerPolicies ici
        Gate::define('access-admin', function ($user) {
            return $user->role === 'admin';
        });
    }
}
