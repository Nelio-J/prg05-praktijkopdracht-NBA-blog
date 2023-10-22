<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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


        Gate::define('updateAccountSettings', function (User $user) {
            return $user->id === Auth::id();
        });

        Gate::define ('create', function (User $user) {
        $totalComments = Comment::all()->where('user_id', '=', $user->id)->count();

//        dd($totalComments);

        if ($totalComments >= 3) {
            return true;
        }

        elseif ($user->is_admin) {
            return true;
        }

        else {
            return false;
        }
        });


//        Gate::define('canEdit', function (User $user, Post $post) {
//            return $user->is_admin or $user->id === $post['user_id']
//                ? Response::allow()
//                : Response::denyAsNotFound();        });
    }
}
