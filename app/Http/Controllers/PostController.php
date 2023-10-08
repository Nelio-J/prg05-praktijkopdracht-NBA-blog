<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
//        foreach (Post::all() as $post) {
 //        }

        return view('posts', [
            'posts' => Post::with('category', 'user')->latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString(),
            'categories' => Category::all(),
            'currentCategory' => Category::where('slug', request('category'))->first()
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('createPost', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
//        $product = new Post();
//        $product->title = 'My ';
//        $product->excerpt = ;

        $attributes = request()->validate([
            'category_id' => 'required|exists:categories,id',
            'slug' => 'required|unique:posts',
            'title' => 'required',
            'image' => 'required|image',
            'excerpt' => 'required',
            'content' => 'required',
        ]);

//        $attributes['user_id'] = auth()->id();

//        Post::create($attributes);

        $attributes['image'] = request()->file('image')->store('thumbnails');
        auth()->user()->posts()->create($attributes);

//        ddd(request()->all());

//        $post = new Post();
//        $post -> title = $request -> input('title');
//        $post -> slug = \Str::slug($request -> input('title'));
//        $post -> excerpt = $request -> input('excerpt');
//        $post -> content = $request -> input('content');
//        $post -> category = $request -> input('category');

//        $post -> save();



        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('post', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
