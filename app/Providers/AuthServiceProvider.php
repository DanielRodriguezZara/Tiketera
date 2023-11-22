<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Rol;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
    public function boot(): void
    {
        $roles = Rol::all();
        foreach($roles as $rol){
            Gate::define($rol->rol, function($user)use($rol){
                return $user->rol->id == $rol->id;
            });
        }
    }
}
