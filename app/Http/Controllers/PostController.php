<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\Gate;
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
        //Show the all posts page

        return view('posts', [
            'posts' => Post::with('category', 'user')->where('status', '=', 'Published')->latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString(),
            'categories' => Category::all(),
            'comment' => Comment::all(),
            'currentCategory' => Category::where('slug', request('category'))->first()
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        //Show the create post page, only if you have posted at least 3 comments (or are an admin)

        if (! Gate::allows('create', $user)) {
//            abort(403);
            return redirect('/posts')->with('success', 'You must leave at least 3 comments before you can create a new post.');
        }

        // The current user can create blog posts...

        return view('createPost', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Store the created post

        //server-side validation
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string',
            'image' => 'required|image',
            'excerpt' => 'required|string',
            'content' =>  'required|string',
        ]);


        $request['user_id'] = auth()->id();
        $request['image'] = request()->file('image')->store('thumbnails');
//        auth()->user()->posts()->create($request);

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
        //Show an individual post
        return view('post', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Post $post)
    {
        //Show the edit post page, only if you created the post (or are an admin)
        if ($request->user()->cannot('update', $post)) {
            abort(404);
        }

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
        //Update the edited post
        /**
         * Update the given blog post.
         *
         * @throws \Illuminate\Auth\Access\AuthorizationException
         */

        //server-side validation
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string',
            'image' => 'image',
            'excerpt' => 'required|string',
            'content' => 'required|string',
        ]);


        if (isset($request['image'])) {
            $filePathName = public_path('storage/'.$post->image);
            if( file_exists($filePathName) ){

                if ($filePathName !== public_path('storage/thumbnails/default-hoop-hub-thumbnail.png') ) {
                    unlink($filePathName);
                }
            }
            $request['image'] = request()->file('image')->store('thumbnails');
            $post -> image = $request -> input('image');
        }

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
        //Delete a post

        $filePathName = public_path('storage/'.$post->image);
        if( file_exists($filePathName) ){
            if ($filePathName !== public_path('storage/thumbnails/default-hoop-hub-thumbnail.png')) {
                unlink($filePathName);
            }
        }

        $post -> delete();

        return redirect('/account/posts')->with('success', 'Post deleted!');

    }
}
