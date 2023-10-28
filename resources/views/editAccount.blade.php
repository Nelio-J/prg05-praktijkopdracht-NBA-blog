@can('updateAccountSettings', $user)
    @extends('layouts.app')
    @vite('resources/css/app.css', 'resources/sass/app.scss')
    @section('pageTitle', 'Edit your account')

    @section('content')
        <main class="tw-max-w-4xl tw-mt-7 tw-px-7 tw-py-7 tw-mx-auto tw-space-y-7 tw-border tw-bg-slate-300 tw-rounded">
            <h1 class="tw-text-lg tw-font-bold tw-mb-4">
                Edit your account
            </h1>

            <form method="POST" action="{{ route('edit account', ['username' => Auth::user()->username]) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="tw-mb-6">
                    <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                           for="name"
                    >
                        Name
                    </label>

                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror border-black"
                           id="name"
                           value="{{ old('name', Auth::user()->name) }}"
                    >

                    @error('name')
                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="tw-mb-6">
                    <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                           for="username"
                    >
                        Username
                    </label>

                    <input type="text"
                           name="username"
                           class="form-control @error('username') is-invalid @enderror border-black"
                           id="username"
                           maxlength="21"
                           value="{{ old('username', Auth::user()->username) }}"
                    >

                    @error('username')
                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="tw-mb-6">
                    <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                           for="email"
                    >
                        E-mail address
                    </label>

                    <input type="text"
                           name="email"
                           class="form-control @error('email') is-invalid @enderror border-black"
                           id="email"
                           value="{{ old('email', Auth::user()->email) }}"
                    >

                    @error('email')
                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="tw-mb-6">
                    <label class="tw-block tw-mb-2 tw-uppercase tw-font-bold tw-text-xs tw-text-gray-700"
                           for="image"
                    >
                        Profile picture
                    </label>

                    <input type="file"
                           name="image"
                           class="form-control @error('image') is-invalid @enderror border-black"
                           id="image"
                           value="{{ old('image', $user['image']) }}"
                    >

                    @error('image')
                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit"
                        class="tw-relative tw-bg-blue-600 tw-py-2 tw-px-4 tw-rounded-2xl tw-text-white hover:tw-bg-blue-500">
                    Update Account Settings
                </button>

            </form>
        </main>
    @endsection
@endcan
