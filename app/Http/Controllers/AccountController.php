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
//        ddd(request()->all());

        $id = Auth::id();

        if (Gate::allows('admin', $post)) {
            return view('admin.posts', [
                'posts' => Post::paginate(50),
                'categories' => Category::all()
            ]);
        }

        else {
            return view('admin.posts', [
                'posts' => Post::with('user')->where('user_id', $id)->paginate(50),
                'categories' => Category::all()
            ]);
        }

    }

    public function account(User $user) {
//        $this->authorize('', $user);
//
//        return view('account', [
//            'user' => $user
//        ]);

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
//        ddd(request()->all());

//        return view('editAccount', [
//                'user' => $user
//            ]);

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
//        ddd(request()->all());

        $this->authorize('updateAccountSettings', User::class);

        //server-side validation
//        Validator::make($data, [
//            'username' => ['string', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user->id)],
//            'name' => ['string', 'max:255'],
//            'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
//            'password' => ['string', 'min:8', 'confirmed'],
//        ]);

        $request->validate([
            'username' => ['string', 'max:21', 'alpha_dash', Rule::unique('users')->ignore($user->id)],
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
//            'password' => ['string', 'min:8', 'confirmed'],
            'image' => 'image',
        ]);

        $id = Auth::id();
        $user = User::find($id);

//        if (isset($request['name'])) {
//            $user->name = $request->input('name');
//        }
//        if (isset($request['username'])) {
//            $user->username= $request->input('username');
//        }
//        if (isset($request['email'])) {
//            $user->email = $request->input('email');
//        }

        $user->username= $request->input('username');
        $user->name = $request->input('name');
        $user->email = $request->input('email');

//        if (isset($request['password'])) {
//            $user->password = Hash::make($request->input('password'));
//        }

        if (isset($request['image'])) {
            $filePathName = public_path('storage/'.$user->image);
            if(file_exists($filePathName)){
//                ddd($filePathName);
                if ($filePathName !== 'avatars/default-profile-picture1.jpg') {
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

        $request->validate([
//            'category_id' => ['exists:', Rule::unique('posts', 'category_id')->ignore($post['category_id'])],
//            'slug' => 'exists:posts,slug',
            'id' => 'numeric|exists:posts,id',
            'status' => 'string|exists:posts,status'
        ]);

//        ddd($request);

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
