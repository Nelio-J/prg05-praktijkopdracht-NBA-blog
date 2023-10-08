<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function index (User $user) {
        return view('posts', [
            'posts' => $user->posts,
            'categories' => Category::all()
        ]);
    }
}
