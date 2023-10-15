@extends('layouts.app')
@vite('resources/css/app.css', 'resources/sass/app.scss')
@section('pageTitle', 'Create a new post')

@section('content')
    <main class="tw-max-w-4xl tw-mt-7 tw-px-7 tw-py-7 tw-mx-auto tw-space-y-7 tw-border tw-bg-slate-300 tw-rounded">
        <h1 class="tw-text-lg tw-font-bold tw-mb-4">
            Publish a new blog post
        </h1>
        <form method="POST" action="{{ route('store post') }}" enctype="multipart/form-data">
            @csrf

            <div class="tw-mb-6">
                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                       for="title"
                >
                    Title
                </label>

                <input type="text"
                       name="title"
                       class="form-control @error('title') is-invalid @enderror border-black"
                       id="title"
                       value="{{ old('title') }}"
                       required
                >

                @error('title')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                @enderror
            </div>

{{--            <div class="tw-mb-6">--}}
{{--                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"--}}
{{--                       for="slug"--}}
{{--                >--}}
{{--                    Slug--}}
{{--                </label>--}}

{{--                <input type="text"--}}
{{--                       name="slug"--}}
{{--                       class="form-control @error('slug') is-invalid @enderror"--}}
{{--                       id="slug"--}}
{{--                       value="{{ old('slug') }}"--}}
{{--                       required--}}
{{--                >--}}

{{--                @error('slug')--}}
{{--                <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

            <div class="tw-mb-6">
                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                       for="image"
                >
                    Thumbnail
                </label>

                <input type="file"
                       name="image"
                       class="form-control @error('image') is-invalid @enderror border-black"
                       id="image"
                       value="{{ old('image') }}"
                       required
                >

                @error('image')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                @enderror
            </div>

            <div class="tw-mb-6">
                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                       for="excerpt"
                >
                    Excerpt
                </label>

                <textarea name="excerpt"
                          class="form-control @error('excerpt') is-invalid @enderror border-black"
                          id="excerpt"
                          maxlength="255"
                          required
                >{{ old('excerpt') }}</textarea>

                @error('excerpt')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                @enderror
            </div>

            <div class="tw-mb-6">
                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                       for="content"
                >
                    Content
                </label>

                <textarea name="content"
                          class="form-control @error('content') is-invalid @enderror border-black"
                          id="content"
                          required
                >{{ old('content') }}</textarea>

                @error('content')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                @enderror
            </div>

            <div class="tw-mb-6">
                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                       for="category_id"
                >
                    Category
                </label>

                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror border-black">
                    <option value="category_id" disabled selected hidden>Select</option>

                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                           {{ old('category_id') == $category->id ? 'selected' : '' }} {{--Write selected category back in the create form--}}
                        >{{$category->name}}</option>
                    @endforeach
                </select>

                @error('category_id')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="tw-relative tw-bg-blue-600 tw-py-2 tw-px-4 tw-rounded-2xl tw-text-white hover:tw-bg-blue-500">
                Publish Post
            </button>

        </form>
    </main>
@endsection
