<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Response;

class PostPolicy
{

    /**
     * Perform pre-authorization checks.
     */
    public function before(User $user, string $ability): bool|null
    {
        if ($user->is_admin) {
            return true;
        }

        return null;
    }

    /**
     * Determine if the given post can be updated by the user.
     */
    public function update(User $user, Post $post): Response
    {
        return $user->id === $post->user_id
            ? Response::allow()
            : Response::denyAsNotFound();
    }

//    public function create(User $user): bool
//    {
//        $totalComments = DB::table('comments')->where('user_id', '=', $user->id)->count();
//
////        dd($totalComments);
//
//        if ($totalComments >= 3) {
//            return true;
//        }
//
//        else {
//            return false;
//        }
//    }

    public function updateAccount(User $user): bool
    {
        $id = Auth::id();
        return $user->id === $id;
    }
}
