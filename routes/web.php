<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('show post');

Route::get('/categories/{category:name}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()

    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'posts' => $user->posts,
        'categories' => Category::all()
    ]);
});

//Route::resource('posts', PostController::class);

//Route::get('/posts', function () {
//    return view('posts', [
//        'posts' => Post::all()
//    ]);
//});

//Route::get('posts/{post:slug}', function (Post $post) {
//    return view('post', [
//        'post' => $post
//    ]);
//});

//Route::get('posts/{post}', function($id) {
//    $path = __DIR__ . "/../resources/posts/$id.html";
//
//    $post = file_get_contents($path);
//
//    return view ('post', [
//        'post' => $post
//    ]);
//});






Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
