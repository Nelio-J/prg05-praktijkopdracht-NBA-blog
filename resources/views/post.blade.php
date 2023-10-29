@extends('layouts.app')
@vite('resources/css/app.css')
@section('pageTitle', 'Article')

@section('content')
    {{-- Show a post --}}
    <article class="tw-max-w-7xl tw-mt-7 tw-mx-auto tw-space-y-7 lg:tw-grid-cols-2">
        <div>
            <a href="{{ route('posts') }}" class="tw-relative tw-text-lg tw-ml-7 tw-px-7 tw-py-1 tw-border tw-bg-gray-700 tw-rounded-full tw-text-white hover:tw-bg-gray-600">< Back to home page</a>
        </div>

        <div class="tw-p-7 lg:tw-flex">
            <div class="tw-flex-1 tw-mr-3">
                <img src="{{Vite::asset('/public/storage/' . $post->image)}}" alt="Blog post thumbnail">

                <p class="tw-mt-4 tw-block text-xs">
                    Published <time>{{$post['created_at']->diffForHumans()}}</time>
                </p>

                <div class="tw-mt-2 tw-flex tw-items-center">
                     <img src="{{ Vite::asset('/public/storage/' . $post->user->image) }}" alt="Writer avatar"
                          class="tw-w-12 tw-h-12 tw-rounded-full tw-overflow-hidden">
                     <div>
                         <a href="{{ route('posts') }}?author={{$post->user->username}}" class="tw-ml-2 tw-text-sm tw-font-semibold">{{$post->user->name}}</a>
                     </div>
                </div>

                <div class="tw-mt-2">
                    @include('layouts.category-visual-design')
                </div>
            </div>

            <div class="tw-flex-1 tw-flex tw-flex-col">
                <header>
                    <div>
                        <h1 class="tw-text-2xl tw-font-semibold">{{$post['title']}}</h1>
                    </div>
                </header>

                <div class="tw-text-sm tw-space-y-4 tw-whitespace-pre-line">
                    {{ $post['content'] }}
                </div>
            </div>
        </div>

        {{-- Comment section --}}
        <section class="tw-p-7 tw-space-y-4">
            <h1 class="tw-font-semibold tw-underline">Comments</h1>
            @auth()
                <form method="POST" action="/posts/{{$post['slug']}}/comments" class="tw-flex tw-border tw-border-black tw-bg-slate-300">
                    @csrf

                    <header class="tw-flex tw-items-center tw-p-7 tw-place-content-around tw-gap-x-4 tw-max-w-sm tw-min-w-max">
                        <img src="{{ Vite::asset('/public/storage/' . Auth::user()->image) }}" alt="User Comment avatar"
                             class="tw-w-24 tw-h-24 tw-rounded-full tw-overflow-hidden">
                    </header>

                    <div class="tw-mb-6">
                        <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                               for="content"
                        >

                        </label>

                        <textarea name="content"
                                  class="form-control @error('content') is-invalid @enderror border-black tw-ml-52 tw-mt-6 tw-w-full"
                                  cols="50"
                                  rows="4"
                                  id="content"
                                  maxlength="255"
                                  placeholder="Let us know your thoughts!"
                                  required
                        >{{ old('excerpt') }}</textarea>

                        @error('content')
                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="tw-flex tw-justify-end tw-mx-auto tw-h-10 tw-mt-14 tw-ml-64">
                        <button type="submit"
                                class="tw-bg-blue-600 tw-py-2 tw-px-4 tw-rounded-2xl tw-text-white hover:tw-bg-blue-500 tw-min-w-max">
                            Post comment
                        </button>
                    </div>

                </form>

            @else
                <p>
                    <a href="{{ route('register') }}">Register</a> or <a href="{{ route('login') }}">Login</a> to leave a comment.
                </p>
            @endauth


            @foreach($post->comment->sortByDesc('created_at') as $comment)
                @include('layouts.comments-design')
            @endforeach
        </section>
    </article>
@endsection
