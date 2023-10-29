<article class="tw-flex tw-border tw-border-black tw-bg-slate-300">
    <div class="tw-border tw-border-black tw-place-content-around tw-gap-x-4 tw-inline-flex tw-items-center tw-p-4 tw-max-w-md tw-min-w-max">
        <div>
            <img src="{{ Vite::asset('/public/storage/' . $comment->user->image) }}" alt="User Comment avatar"
                 class="tw-w-24 tw-h-24 tw-rounded-full tw-overflow-hidden">
        </div>

        <div>
            <header class="tw-space-y-4">
                <div class="tw-font-semibold">{{$comment->user->username}}</div>
                <p class="tw-mt-4 tw-block text-xs">
                    Posted <time>{{$comment['created_at']->format("F j, Y, g:i a")}}</time>
                </p>
            </header>
        </div>
    </div>


    <div class="tw-px-4 tw-text-sm tw-space-y-4 tw-whitespace-pre-line">
        {{ $comment['content'] }}
    </div>

</article>
