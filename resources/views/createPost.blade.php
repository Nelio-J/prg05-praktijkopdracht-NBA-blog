@extends('layouts.app')
@vite('resources/css/app.css', 'resources/sass/app.scss')
@section('pageTitle', 'Create a new post')

@section('content')
    <main class="tw-max-w-4xl tw-mt-7 tw-px-7 tw-mx-auto tw-space-y-7">
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

                <input class="form-control"
                       type="text"
                       name="title"
                       id="title"
                       value="{{ old('title') }}"
                       required
                >

                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="tw-mb-6">
                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                       for="slug"
                >
                    Slug
                </label>

                <input class="form-control"
                       type="text"
                       name="slug"
                       id="slug"
                       value="{{ old('slug') }}"
                       required
                >

                @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="tw-mb-6">
                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                       for="image"
                >
                    Thumbnail
                </label>

                <input class="form-control"
                       type="file"
                       name="image"
                       id="image"
                       value="{{ old('image') }}"
                       required
                >

                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="tw-mb-6">
                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                       for="excerpt"
                >
                    Excerpt
                </label>

                <textarea class="form-control"
                          name="excerpt"
                          id="excerpt"
                          required
                >{{ old('excerpt') }}</textarea>

                @error('excerpt')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="tw-mb-6">
                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                       for="content"
                >
                    Content
                </label>

                <textarea class="form-control"
                          name="content"
                          id="content"
                          required
                >{{ old('content') }}</textarea>

                @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="tw-mb-6">
                <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                       for="category_id"
                >
                    Category
                </label>

                <select name="category_id" id="category_id" class="tw-bg-transparent tw-py-2 tw-text-sm tw-font-semibold">
                    <option value="category_id" disabled selected hidden>Select</option>

                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                           {{ old('category_id') == $category->id ? 'selected' : '' }} {{--Write selected category back in the create form--}}
                        >{{$category->name}}</option>
                    @endforeach
                </select>

                @error('category')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="tw-relative tw-bg-blue-600 tw-py-2 tw-px-4 tw-rounded-2xl tw-text-white">
                Publish Post
            </button>

        </form>
    </main>
@endsection
