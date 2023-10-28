<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use App\Policies\PostPolicy;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AccountController extends Controller
{
    //
    public function index(Post $post): View
    {
        //Show the dashboard page

        $id = Auth::id();

        //admins see all posts by all users
        if (Gate::allows('admin', $post)) {
            return view('admin.posts', [
                'posts' => Post::paginate(50),
                'categories' => Category::all()
            ]);
        }

        //Users only see their own posts
        else {
            return view('admin.posts', [
                'posts' => Post::with('user')->where('user_id', $id)->paginate(50),
                'categories' => Category::all()
            ]);
        }

    }

    public function account(User $user) {

        //Show your account page
        if (Gate::allows('updateAccountSettings', $user)) {
            $id = Auth::id();

            return view('account', [
                'user' => User::where('id', $id)->first()
            ]);
        }
        else {
            abort(404);
        }
    }

    public function accountSettings(User $user): View
    {
        //Show the edit account page

        $id = Auth::id();

        if (Gate::allows('updateAccountSettings', $user)) {
            return view('editAccount', [
                'user' => User::where('id', $id)->first()
            ]);
        }
        else {
            abort(404);
        }

    }

    public function update(Request $request, User $user): RedirectResponse
    {
        //Update your account settings

        $this->authorize('updateAccountSettings', User::class);

        //server-side validation
//        Validator::make($request->all(), [
//            'username' => ['string', 'max:21', 'alpha_dash', Rule::unique('users')->ignore($user->id)],
//            'name' => 'string', 'max:255',
//            'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
////            'password' => ['string', 'min:8', 'confirmed'],
//            'image' => 'image',
//        ])->validate();

        $id = Auth::id();
        $user = User::find($id);

        $request->validate([
            'username' => ['string', 'max:21', 'alpha_dash', Rule::unique('users')->ignore($user->id)],
            'name' => 'string', 'max:255',
            'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'image' => 'image',
        ]);


        $user->username= $request->input('username');
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if (isset($request['image'])) {
            $filePathName = public_path('storage/'.$user->image);
            if(file_exists($filePathName)){
                if ($filePathName !== public_path('storage/avatars/default-profile-picture1.jpg')) {
                    unlink($filePathName);
                }
            }
            $request['image'] = request()->file('image')->store('avatars');
            $user->image = $request->input('image');
        }


        $user->save();

        return redirect('/account/' . $user->username)->with('success', 'Account updated!');


    }

    public function changePostStatus(Request $request)
    {
        //Change post status

        $request->validate([
//            'category_id' => ['exists:', Rule::unique('posts', 'category_id')->ignore($post['category_id'])],
//            'slug' => 'exists:posts,slug',
            'id' => 'numeric|exists:posts,id',
            'status' => 'string|exists:posts,status'
        ]);

        $post = Post::find($request['id']);

        if ($request['status'] == 'Published') {
            $request['status'] = 'Unpublished';
            $post['status'] = $request -> input('status');
        }
        else {
            $request['status'] = 'Published';
            $post['status'] = $request -> input('status');
        }

        $post->update();

        return redirect('/account/posts')->with('success', 'Post updated!');
    }
}
