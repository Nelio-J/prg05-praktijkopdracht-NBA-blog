<article class="bg-gray-200 hover:bg-gray-500 rounded-xl card">
    <div class="p-7 lg:flex">
        <div class="flex-1 mr-3">
            <img src="https://cdn.nba.com/manage/2023/06/lebron-passes-kareem.jpg" alt="Blog post thumbnail">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header>
                <div>
                    <h1 class="text-2xl font-semibold">{{$post['title']}}</h1>
                </div>
            </header>

            <div class="text-sm break-words">
                <p>{{$post['excerpt']}}</p>
            </div>

            <div class="mb-2">
                <a href="/posts/{{$post['slug']}}"
                   class="px-4 py-1 border bg-black rounded-full text-white text-xs uppercase font-semibold">Read</a>
            </div>

            <footer class="mt-7">
                <div class="flex items-center text-sm">
                    <img src="{{ Vite::asset('/public/storage/avatar_ein.png') }}" alt="Writer avatar"
                         class="relative w-12 h-12 rounded-full overflow-hidden">
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
            </footer>
        </div>
    </div>
</article>

{{--<article class="bg-gray-200 hover:bg-gray-500 rounded-xl">--}}
{{--    <div class="p-7 lg:flex">--}}
{{--        <div class="flex-1 mr-3">--}}
{{--            <img src="https://cdn.nba.com/manage/2023/08/sengun-green-sidelines-1568x882.jpg" alt="Blog post thumbnail">--}}
{{--        </div>--}}

{{--        <div class="flex-1 flex flex-col justify-between">--}}
{{--            <header>--}}
{{--                <div>--}}
{{--                    <h1 class="text-2xl font-semibold">Rockets look to take next step as rebuild continues</h1>--}}
{{--                </div>--}}
{{--            </header>--}}

{{--            <div class="text-sm">--}}
{{--                <p>Eleatess credere in fidelis quadrata!</p>--}}
{{--            </div>--}}

{{--            <div class="mb-2">--}}
{{--                <a href="/posts/my-second-post" class="px-4 py-1 border bg-black rounded-full text-white text-xs uppercase font-semibold">Read</a>--}}
{{--            </div>--}}

{{--            <footer class="mt-7">--}}
{{--                <div class="flex items-center text-sm">--}}
{{--                    <img src="{{ Vite::asset('/public/storage/avatar_ein.png') }}" alt="Writer avatar" class="relative w-12 h-12 rounded-full overflow-hidden">--}}
{{--                    <div class="ml-2">--}}
{{--                        <h4>Nelio Jarmohamed</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="mt-1">--}}
{{--                    <a href="#" class="px-4 py-1 border bg-rockets-red rounded-full text-white text-xs uppercase font-semibold">Rockets</a>--}}
{{--                    <a href="#" class="px-4 py-1 border bg-amber-50 rounded-full text-black text-xs uppercase font-semibold">General News</a>--}}
{{--                </div>--}}
{{--            </footer>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</article>--}}
