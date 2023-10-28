<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') | {{config('app.name')}}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="tw-font-roboto">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light tw-bg-gray-900 shadow-sm">
            <div class="tw-flex tw-justify-between tw-items-center tw-px-7 tw-py-4 container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ Vite::asset('/public/storage/PRG05_Hoop_Hub_Logo_V1_200px.png') }}" alt="Hoop Hub website logo" width="200">
                </a>



                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('posts') }}">{{ __('Posts') }}</a>
                        </li>
                    </ul>

                    @if (session('success'))
                        <div class="alert alert-success border border-black bg-info-subtle" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <span class="tw-relative tw-py-2 tw-px-4">
                            <a href="{{ route('create post') }}" class="tw-relative tw-bg-blue-600 tw-py-2 tw-px-4 tw-rounded-2xl tw-text-white hover:tw-bg-blue-500">Create new post</a>
                        </span>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('account posts') }}">
                                        Dashboard
                                    </a>

                                    <a class="dropdown-item" href="{{ route('account', ['username' => Auth::user()->username]) }}">
                                        Account
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>

<footer class="tw-bg-gray-900 tw-border tw-border-black tw-border-opacity-5 tw-mt-7 tw-px-7 tw-py-4">
    <h5 class="tw-text-white">©Hoop Hub, LLC. All rights reserved.</h5>
</footer>
</html>
