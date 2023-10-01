@extends('layouts.app')
@vite('resources/css/app.css')
@section('pageTitle', 'Posts')

@section('content')
        @include('_posts-header')
        <main class="tw-max-w-7xl tw-mt-7 tw-px-7 tw-mx-auto tw-space-y-7">
            @foreach($posts as $post)
                @include('layouts.post-card')
            @endforeach
        </main>
@endsection
