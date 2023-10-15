<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.posts', [
            'posts' => Post::paginate(50),
            'categories' => Category::all()
        ]);
    }

    public function changePostStatus(Request $request, Post $post)
    {

        $request->validate([
//            'category_id' => ['exists:', Rule::unique('posts', 'category_id')->ignore($post['category_id'])],
//            'slug' => ['exists:', Rule::unique('posts', 'slug')->ignore($post['slug'])],
            'status' => 'string|exists:status'
        ]);



        if ($request['status'] = 'Published') {
            $request['status'] = 'Unpublished';
            $post -> status = $request -> input('status');
        }
        else {
            $request['status'] = 'Published';
            $post -> status = $request -> input('status');
        }

        $post->save();

        ddd(request()->all());

        return response('Status updated!', 'success');
    }
}
