@extends('layouts.app')
@vite('resources/css/app.css', 'resources/sass/app.scss')
@section('pageTitle', 'Manage your posts')

@section('content')
    <main class="tw-max-w-5xl tw-mt-7 tw-px-7 tw-py-7 tw-mx-auto tw-space-y-7 tw-border tw-bg-slate-300 tw-rounded">
        <h1 class="tw-text-lg tw-font-bold tw-mb-4">
            Manage your blog posts
        </h1>

        <table class="tw-min-w-full tw-divide-y-2 tw-divide-black">
            <thead class="tw-font-medium tw-space-x-2 tw-p-4 tw-pl-8 tw-pt-0 tw-pb-3 tw-text-left">
            <tr>
                <th class="tw-w-96">Title</th>
                <th class="tw-w-60">Author</th>
                <th class="tw-w-40">Status</th>
            </tr>
            </thead>
            <tbody class="tw-divide-y-2 tw-divide-slate-600 tw-text-sm tw-font-medium tw-p-4 tw-pl-8 tw-pt-0 tw-pb-3 tw-text-left">

            @foreach($posts as $post)
                <tr class="tw-h-10">
                    <td>
                        <a href="/posts/{{$post['slug']}}">{{$post['title']}}</a>
                    </td>
                    <td>{{$post->user->name}}</td>
                    <td>
                        <form method="POST"
                              action="{{ route('change status') }}"
                        >
                            @csrf
                            @method('PATCH')

                            <button class="tw-px-2 tw-inline-flex tw-mt-3 tw-font-semibold tw-rounded-full tw-bg-green-100 tw-text-green-800"
                            >
                                {{$post['status']}}
                            </button>
                        </form>
                    </td>
                    <td class="tw-w-24">
                        <a href="/posts/{{$post['slug']}}/edit">Edit</a>
                    </td>
                    <td>
                        <form method="POST"
                            action="/admin/posts/{{$post['slug']}}"
                            class="tw-mb-0 tw-text-red-600"
                            x-data="{conf: false, check: false}"
                            @submit.prevent="if(conf == false) return;$el.submit()"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                class="text-gray-500"
                                @click="check = confirm('are you sure want delete: {{$post->title}}?'); conf = check;"
                                type="submit"
                            >Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if (session('success'))
                <div class="alert alert-success border border-black bg-info-subtle" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            </tbody>
        </table>
    </main>
@endsection
