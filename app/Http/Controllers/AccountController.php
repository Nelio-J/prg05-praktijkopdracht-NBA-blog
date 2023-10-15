<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index()
    {
//        ddd(request()->all());

        $id = Auth::id();

        return view('admin.posts', [
            'posts' => Post::with('user')->where('user_id', $id)->paginate(50),
            'categories' => Category::all()
        ]);


    }
}
