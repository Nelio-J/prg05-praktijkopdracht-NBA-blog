<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @extends('layouts.layouts')
    @section('pageTitle', 'Home')
</head>

<section class="font-roboto">
    <nav class="flex justify-between items-center bg-gray-900 px-7 py-4">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('/public/storage/PRG05_Hoop_Hub_Logo_V1_200px.png') }}"
                     alt="Hoop Hub website logo" width="200">
            </a>
        </div>

        <div>
            <a href="/" class="px-5 py-3 text-white">Login</a>

            <a href="#" class="px-5 py-3 text-white">Register</a>
        </div>
    </nav>

    <main class="max-w-7xl mt-7 mx-auto space-y-7">
        <article class="lg:grid-cols-2">
            <div>
                <a href="/" class="relative text-lg ml-7 px-7 py-1 border bg-gray-700 rounded-full text-white hover:bg-gray-600">< Back to home page</a>
            </div>

            <div class="p-7 lg:flex">
                <div class="flex-1 mr-3">
                    <img src="https://cdn.nba.com/manage/2023/06/lebron-passes-kareem.jpg" alt="Blog post thumbnail">

                    <div class="mt-2 flex items-center">
                        <img src="{{ Vite::asset('/public/storage/avatar_ein.png') }}" alt="Writer avatar"
                             class="w-12 h-12 rounded-full overflow-hidden">
                        <div class="ml-2">
                            <h4>Nelio Jarmohamed</h4>
                        </div>
                    </div>

                    <div class="mt-1">
                        <a href="#"
                           class="px-4 py-1 border bg-lakers-purple rounded-full text-lakers-gold text-xs uppercase font-semibold">Lakers</a>
                        <a href="#"
                           class="px-4 py-1 border border-red-600 rounded-full text-black text-xs uppercase font-semibold">Performance</a>
                    </div>
                </div>
            </div>

            <?= $post; ?>

        </article>
    </main>

    <footer class="bg-gray-900 border border-black border-opacity-5 mt-7 px-7 py-4">
        <h5 class="text-white">©Hoop Hub, LLC. All rights reserved.</h5>
    </footer>
</section>
</html>
