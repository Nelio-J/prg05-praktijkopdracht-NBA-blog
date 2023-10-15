<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
//use App\Models\User;

//use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use Cviebrock\EloquentSluggable\Services\SlugService;

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
            'posts' => Post::with('category', 'user')->where('status', '=', 'Published')->latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString(),
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
    public function store(Request $request)
    {
        //
//        $product = new Post();
//        $product->title = 'My ';
//        $product->excerpt = ;

        //server-side validation
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required',
            'image' => 'required|image',
            'excerpt' => 'required',
            'content' =>  'required',
        ]);


//        $attributes['user_id'] = auth()->id();

//        Post::create($attributes);

        $request['user_id'] = auth()->id();
        $request['image'] = request()->file('image')->store('thumbnails');
//        auth()->user()->posts()->create($request);

//        ddd(request()->all());

        $post = new Post();
        $post -> user_id = $request -> input('user_id');
        $post -> category_id = $request -> input('category_id');
        $post -> slug = SlugService::createSlug(Post::class, 'slug', ($request -> input('title')));
        $post -> title = $request -> input('title');
        $post -> image = $request -> input('image');
        $post -> excerpt = $request -> input('excerpt');
        $post -> content = $request -> input('content');

        $post -> save();

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
    public function edit(Post $post)
    {
        //
        return view('editPost', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        //
//        ddd(request()->all());

        /**
         * Update the given blog post.
         *
         * @throws \Illuminate\Auth\Access\AuthorizationException
         */

        $this->authorize('update', Post::class);


        //server-side validation
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required',
            'image' => 'image',
            'excerpt' => 'required',
            'content' => 'required',
        ]);


        if (isset($request['image'])) {
            $request['image'] = request()->file('image')->store('thumbnails');
            $post -> image = $request -> input('image');
        }
//        $post = Post::find (15);

        $post -> category_id = $request -> input('category_id');

        if (isset($request['title'])) {
            $post -> title = $request -> input('title');
            $post -> slug = SlugService::createSlug(Post::class, 'slug', ($request -> input('title')));
        }

        $post -> excerpt = $request -> input('excerpt');
        $post -> content = $request -> input('content');

        $post -> save();

        return redirect('/account/posts')->with('success', 'Post updated!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        $filePathName = '/public/storage/'.$post->image;
        if( file_exists($filePathName) ){
            unlink($filePathName);
        }

        $post -> delete();

        return redirect('/account/posts')->with('success', 'Post deleted!');

    }
}
