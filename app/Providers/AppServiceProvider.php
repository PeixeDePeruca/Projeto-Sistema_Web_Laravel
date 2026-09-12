<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Hospede;
use App\Policies\HospedePolicy;
use App\Models\Quarto;
use App\Policies\QuartoPolicy;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Registrar as policies
        Gate::policy(Hospede::class, HospedePolicy::class);
        Gate::policy(Quarto::class, QuartoPolicy::class);

        // Definir regra de permissão de Administrador
        Gate::define('admin', function (User $user) {
            return (bool) ($user->is_admin ?? $user->role === 'admin');
        });
    }
}