<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;

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
Route::get('/create', [PostController::class, 'create'])->middleware('auth')->name('create post');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth')->name('store post');

Route::post('/posts/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth')->name('store comment');

Route::get('/account/posts', [AccountController::class, 'index'])->middleware('auth')->name('account posts');
Route::get('/posts/{post:slug}/edit', [PostController::class, 'edit'])->middleware('auth')->name('edit post');
Route::patch('/account/posts/{post:slug}', [PostController::class, 'update'])->middleware('auth')->name('update post');
Route::delete('/account/posts/{post:slug}', [PostController::class, 'destroy'])->middleware('auth')->name('delete post');

Route::get('/account/{username}', [AccountController::class, 'account'])->middleware('auth')->name('account');
Route::get('/account/{username}/edit', [AccountController::class, 'accountSettings'])->middleware('auth')->name('account settings');
Route::patch('/account/username}', [AccountController::class, 'update'])->middleware('auth')->name('edit account');

//Route::get('/admin/posts', [AdminController::class, 'index'])->middleware('auth', 'can:admin')->name('admin posts');

Route::patch('/account/posts', [AccountController::class, 'changePostStatus'])->middleware('auth')->name('change status');

//Route::resource('posts', PostController::class)->middleware('auth')->except('index', 'show');

//Route::get('/category/{category:slug}', [PostController::class, 'index'])->name('categories');
//Route::get('/authors/{user:username}', [AuthorController::class, 'index'])->name('authors');

//Route::get('/categories/{category:name}', function (Category $category) {
//    return view('posts', [
//        'posts' => $category->posts,
//        'currentCategory' => $category,
//        'categories' => Category::all()
//
//    ]);
//});

//Route::get('/authors/{user:username}', function (User $user) {
//    return view('posts', [
//        'posts' => $user->posts,
//        'categories' => Category::all()
//    ]);
//});

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
