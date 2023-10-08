<article class="tw-bg-gray-200 hover:tw-bg-gray-500 tw-rounded-xl tw-card">
    <div class="tw-p-7 lg:tw-flex">
        <div class="tw-flex-1 tw-mr-3">
            <img src="{{asset('storage/' . $post->image)}}" alt="Blog post thumbnail">
        </div>

        <div class="tw-flex-1 tw-flex tw-flex-col tw-justify-between">
            <header>
                <div>
                    <h1 class="tw-text-2xl tw-font-semibold">{{$post['title']}}</h1>
                </div>
            </header>

            <div class="tw-text-sm tw-break-words">
                <p>{{$post['excerpt']}}</p>
            </div>

            <div class="tw-mb-2">
                <a href="/posts/{{$post['slug']}}"
                   class="tw-px-4 tw-py-1 tw-border tw-bg-black tw-rounded-full tw-text-white tw-text-xs tw-uppercase tw-font-semibold">Read</a>
            </div>

            <footer class="tw-mt-7">
                <div class="tw-flex tw-items-center tw-text-sm">
                    <img src="{{ Vite::asset('/public/storage/avatar_ein.png') }}" alt="Writer avatar"
                         class="tw-relative tw-w-12 tw-h-12 tw-rounded-full tw-overflow-hidden">
                    <div>
                        <a href="{{ route('posts') }}?author={{$post->user->username}}" class="tw-ml-2 tw-text-sm">{{$post->user->name}}</a>
                    </div>
                </div>

                <div class="tw-mt-1 tw-px-4 tw-py-1 tw-text-xs">
                    Published <time>{{$post['created_at']->diffForHumans()}}</time>
                </div>

                <div class="tw-mt-1">
                    @include('layouts.category-visual-design')
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
