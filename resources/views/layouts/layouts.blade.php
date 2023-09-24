<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('pageTitle') | {{config('app.name')}}</title>
</head>

<section class="font-roboto">
    <nav class="flex justify-between items-center bg-gray-900 px-7 py-4">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('/public/storage/PRG05_Hoop_Hub_Logo_V1_200px.png') }}" alt="Hoop Hub website logo" width="200">
            </a>
        </div>

        <div>
            <a href="/" class="px-5 py-3 text-white">Login</a>

            <a href="#" class="px-5 py-3 text-white">Register</a>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-gray-900 border border-black border-opacity-5 mt-7 px-7 py-4">
        <h5 class="text-white">©Hoop Hub, LLC. All rights reserved.</h5>
    </footer>
</section>


</html>
