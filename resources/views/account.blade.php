@extends('layouts.app')
@vite('resources/css/app.css', 'resources/sass/app.scss')
@section('pageTitle', 'Manage your account')

@section('content')
    <main class="tw-max-w-2xl tw-mt-7 tw-px-7 tw-py-7 tw-mx-auto tw-space-y-7 tw-border tw-bg-slate-300 tw-rounded">
        <h1 class="tw-text-lg tw-font-bold tw-mb-4">
            Your account
        </h1>

        <div class="tw-content-around lg:tw-flex">
            <div class="tw-flex-1 tw-mr-3 tw-space-y-7 tw-text-lg tw-font-semibold">
                <div class="tw-mt-2 tw-flex tw-items-center">
                    <div class="tw-relative group">
                        <img src="{{ Vite::asset('/public/storage/' . $user->image) }}" alt="User avatar" title="Upload"
                             class="tw-w-32 tw-h-32 tw-rounded-full tw-overflow-hidden">
{{--                        <div>--}}
{{--                            <form method="POST"--}}
{{--                                  action="{{ route('edit account', ['username' => Auth::user()->username]) }}"--}}
{{--                                  enctype="multipart/form-data"--}}
{{--                                  name="update_profile_picture"--}}
{{--                                  id="update_profile_picture"--}}
{{--                                  class="tw-opacity-0 hover:tw-opacity-100 tw-duration-300 tw-absolute tw-flex tw-inset-0 tw-z-10 tw-justify-center tw-items-center text-white font-semibold tw-text-sm">--}}
{{--                                @csrf--}}
{{--                                @method('PATCH')--}}

{{--                                <div>--}}
{{--                                    <label--}}
{{--                                        class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"--}}
{{--                                        for="image"--}}
{{--                                    >--}}
{{--                                    </label>--}}

{{--                                    <input type="file"--}}
{{--                                           name="image"--}}
{{--                                           class="form-control @error('image') is-invalid @enderror"--}}
{{--                                           id="image"--}}
{{--                                           value="{{ old('image', $user['image']) }}"--}}
{{--                                    >--}}

{{--                                    @error('image')--}}
{{--                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </div>

                    <div>
                        <a href="{{ route('posts') }}?author={{$user->username}}" class="tw-ml-2">{{$user->name}}</a>
                    </div>

                </div>

                <div>
                    <div>Username: {{$user['username']}}</div>
                </div>

                <div>
                    <div>Email: {{$user['email']}}</div>
                </div>

                <div>
                    <a href="{{ route('account settings', ['username' => Auth::user()->username]) }}" class="tw-relative tw-bg-blue-600 tw-py-2 tw-px-4 tw-rounded-2xl tw-text-white hover:tw-bg-blue-500">Edit your account</a>
                </div>

{{--                <button type="submit"--}}
{{--                        form="update_profile_picture"--}}
{{--                        class="tw-relative tw-bg-blue-600 tw-py-2 tw-px-4 tw-rounded-2xl tw-text-white hover:tw-bg-blue-500">--}}
{{--                    Update--}}
{{--                </button>--}}

            </div>
        </div>
    </main>
@endsection
