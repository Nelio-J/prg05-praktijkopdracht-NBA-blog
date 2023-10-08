@extends('layouts.app')
@vite('resources/css/app.css')
@section('pageTitle', 'Article')

@section('content')
    <article class="tw-max-w-7xl tw-mt-7 tw-mx-auto tw-space-y-7 lg:grid-cols-2">
        <div>
            <a href="{{ route('posts') }}" class="tw-relative tw-text-lg tw-ml-7 tw-px-7 tw-py-1 tw-border tw-bg-gray-700 tw-rounded-full tw-text-white hover:tw-bg-gray-600">< Back to home page</a>
        </div>

        <div class="tw-p-7 lg:tw-flex">
            <div class="tw-flex-1 tw-mr-3">
                <img src="{{asset('storage/' . $post->image)}}" alt="Blog post thumbnail">

                <p class="tw-mt-4 tw-block text-xs">
                    Published <time>{{$post['created_at']->diffForHumans()}}</time>
                </p>

                <div class="tw-mt-2 tw-flex tw-items-center">
                     <img src="{{ Vite::asset('/public/storage/avatar_ein.png') }}" alt="Writer avatar"
                          class="tw-w-12 tw-h-12 tw-rounded-full tw-overflow-hidden">
                     <div>
                         <a href="{{ route('posts') }}?author={{$post->user->username}}" class="tw-ml-2 tw-text-sm tw-font-semibold">{{$post->user->name}}</a>
                     </div>
                </div>

                <div class="tw-mt-1">
                    @include('layouts.category-visual-design')
                </div>
            </div>

            <div class="tw-flex-1 tw-flex tw-flex-col">
                <header>
                    <div>
                        <h1 class="tw-text-2xl tw-font-semibold">{{$post['title']}}</h1>
                    </div>
                </header>

                <div class="tw-text-sm tw-space-y-4">
                    {!! $post['content'] !!}
                </div>
            </div>
        </div>
    </article>
@endsection
