<header class="tw-mt-7 tw-px-7">
    <div class="tw-max-w-4xl">
        <h1 class="tw-text-3xl">
            Latest news
        </h1>

        <div class="tw-mt-4 lg:tw-space-x-8 tw-inline-flex">

            <span class="tw-relative tw-bg-gray-200 tw-rounded-s lg:tw-inline-flex tw-items-center">
                <label for="tag-1" class="tw-relative tw-bg-gray-200 tw-flex lg:tw-inline-flex tw-items-center">Teams:</label>
                <div x-data="{ open: false }" @click.outside="open = false" id="tag-1">
                    <button @click="open = ! open" class="tw-py-2 tw-px-5 tw-text-sm tw-font-semibold tw-w-60 tw-text-left tw-inline-flex">
                        {{isset($currentCategory) ? ($currentCategory->name) : 'Select'}}
                        <img src="{{ Vite::asset('/public/storage/dropdown_arrow.png') }}" alt="Dropdown menu" width="19" height="19" class="tw-pointer-events-none tw-absolute tw-right-2">
                    </button>

                    <div x-show="open" class="tw-absolute tw-bg-gray-100 tw-py-2 tw-w-60 tw-mt-2 tw-max-h-64 tw-overflow-auto" style="display: none">
                        @foreach($categories as $category)
                            <a href="{{ request()->fullUrlWithQuery(['category'=>$category->slug, 'page'=>null])}}"
                               class="tw-block tw-text-left tw-px-5 tw-py-2 text-xs tw-text-black tw-leading-5 hover:tw-bg-blue-700 focus:tw-bg-blue-700 hover:tw-text-white focus:tw-text-white
                               {{isset($currentCategory) && $currentCategory->is($category) ? 'tw-bg-blue-700 tw-text-white' : ''}}">
                                {{$category->name}}</a>
                        @endforeach
                    </div>
                </div>
            </span>


{{--                    <label for="tag-1">Teams:</label>--}}
{{--                    <select name="teams" id="tag-1" class="tw-appearance-none tw-bg-transparent tw-py-2 tw-px-5 tw-text-sm tw-font-semibold">--}}

{{--                        <option value="Category" disabled selected hidden>Select</option>--}}

{{--                        @foreach($categories as $category)--}}
{{--                            <option value="{{$category->name}}">{{$category->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    <img src="{{ Vite::asset('/public/storage/dropdown_arrow.png') }}" alt="Dropdown menu" width="19" height="19" class="tw-pointer-events-none tw-absolute tw-right-2">--}}

            <span class="tw-relative tw-bg-gray-200 tw-rounded-s hover:tw-bg-gray-400 tw-flex lg:tw-inline-flex tw-py-2 tw-px-4">
                    <input class="btn-check tag-input" name="tags[]" type="checkbox" id="tag-2" value="Performance" autocomplete="off">
                    <label class="btn btn-secondary" for="tag-2">Performance</label>
                </span>

            <span class="tw-relative tw-bg-gray-200 tw-rounded-s lg:tw-inline-flex">
                <form method="GET" action="{{ route('posts') }}" class="tw-flex-wrap tw-flex tw-absolute tw-bg-gray-200 tw-rounded-s lg:tw-inline-flex tw-py-2 tw-px-4 tw-items-center tw-mt-2">
                   @if(request('category')) {{--search within a requested category--}}
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    <label for="search"></label>
                    <input type="text" name="search" id="search" placeholder="Search" value="{{ request('search') }}" class="tw-bg-transparent tw-placeholder-black tw-text-sm tw-font-semibold tw-relative tw-flex lg:tw-inline-flex tw-items-center">
                </form>
            </span>

        </div>
    </div>
</header>
