<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    public function store(Request $request, Post $post)
    {

        //server-side validation
        $request->validate([
            'post_id' => 'exists:posts,id',
            'user_id' => 'exists:posts,id',
            'content' =>  'required',
        ]);

        $request['user_id'] = auth()->id();

        $post->comment()->create([
            'user_id' => $request -> user()->id,
            'content' => $request -> input('content')
        ]);

//        ddd(request()->all());

//        $post = new Post();
//        $post -> user_id = $request -> input('user_id');
//        $post -> content = $request -> input('content');
//
//        $post -> save();

        return back();

    }
}
