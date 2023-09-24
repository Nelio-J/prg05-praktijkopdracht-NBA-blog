<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @extends('layouts.layouts')
    @section('pageTitle', 'Home')
</head>

    @section('content')
        @include('_posts-header')
        <main class="max-w-7xl mt-7 px-7 mx-auto space-y-7">
            @foreach($posts as $post)
                @include('layouts.post-card')
            @endforeach
    @endsection
</html>
