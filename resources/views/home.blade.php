@extends('layouts.app')
@section('pageTitle', 'Home')
@vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
<div class="container tw-mt-7">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header tw-font-semibold">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <p>Welcome to Hoop Hub, a blog about all things NBA!</p>
                        <br>
                        <p>Here you can follow all NBA-related news. Feel free to share your thoughts with other users.</p>
                        <p>Active members are also able to create their own articles and report on NBA news.</p>
                        <p>Get started by checking out some of the news on our post tab or by clicking our logo below!</p>
                        <br>
                        <a class="navbar-brand" href="{{ route('posts') }}">
                            <img src="{{ Vite::asset('/public/storage/PRG05_Hoop_Hub_Logo_V1.png') }}" alt="Hoop Hub website logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
