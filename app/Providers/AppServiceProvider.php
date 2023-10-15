<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrapFive();
        Gate::define('admin', function (User $user) {
            return $user->is_admin
                ? Response::allow()
                : Response::deny('You must be an administrator.');        });

//        Gate::define('canEdit', function (User $user, Post $post) {
//            return $user->is_admin or $user->id === $post['user_id']
//                ? Response::allow()
//                : Response::denyAsNotFound();        });
    }
}
