<article class="tw-bg-gray-200 hover:tw-bg-gray-500 tw-rounded-xl tw-card">
    <div class="tw-p-7 lg:tw-flex">
        <div class="tw-flex-1 tw-mr-3">
            <img src="{{Vite::asset('/public/storage/' . $post->image)}}" alt="Blog post thumbnail" class="tw-max-w-1xl tw-max-h-96">
        </div>

        <div class="tw-flex-1 tw-flex tw-flex-col tw-justify-between tw-ml-4">
            <header>
                <div>
                    <h1 class="tw-text-2xl tw-font-semibold">{{$post['title']}}</h1>
                </div>
            </header>

            <div class="tw-text-sm tw-break-words tw-whitespace-pre-line">
                <p>{{$post['excerpt']}}</p>
            </div>

            <div class="tw-mb-2">
                <a href="/posts/{{$post['slug']}}"
                   class="tw-px-4 tw-py-1 tw-border tw-bg-black tw-rounded-full tw-text-white tw-text-xs tw-uppercase tw-font-semibold">Read</a>
            </div>

            <footer class="tw-mt-7">
                <div class="tw-flex tw-items-center tw-text-sm">
                    <img src="{{ Vite::asset('/public/storage/' . $post->user->image) }}" alt="Writer avatar"
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
