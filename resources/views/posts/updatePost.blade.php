@extends('master')
@section('meta')
    <title>
        update post
    </title>
@endsection
@section('content')
    <div class="w-full flex flex-col gap-3 min-h-screen sm:min-h-screen lg:min-h-[100vh] pl-6 sm:pl-6 lg:pl-8">
        <h2
            class="w-full text-emerald-300 font-poppins text-xl sm:text-xl lg:text-2xl font-bold mt-6 sm:mt-6 lg:mt-8 uppercase">
            {{ __('Update Post') }}
        </h2>


        <form action="{{ route('posts.update_post', $post->id) }}" method="post" class="w-full flex flex-col gap-3 p-2">
            @csrf
            @method('PATCH')
            <div class="w-full flex flex-col items-start gap-2">
                <label for="title" class="flex flex-row items-center gap-1">
                    <span class="text-slate-200 text-base">{{ __('Title') }}</span>
                    <span class="text-red-600 text-lg sm:text-lg lg:text-xl">*</span>
                </label>
                <input
                    class="w-full pl-1 p-2 text-slate-200 text-sm bg-gray-700 rounded focus:outline-none placeholder:text-sm "
                    type="text" name="title" id="title" value="{{ __($post->title) }}" autocomplete="title">
            </div>
            <div class="w-full flex flex-col items-start gap-2">
                <label for="content" class="flex flex-row items-center gap-1">
                    <span class="text-slate-200 text-base">{{ __('Content') }}</span>
                    <span class="text-red-600 text-lg sm:text-lg lg:text-xl">*</span>
                </label>
                <textarea name="content" id="content" class="w-full text-sm pl-1 pb-12 sm:pb-12 lg:pb-16  text-slate-200 bg-gray-700 rounded focus:outline-none placeholder:text-sm">{{ __($post->content) }}
                </textarea>
            </div>
            <div class="w-full flex flex-row justify-start mt-4">
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-500 rounded px-3 py-2 text-slate-200 font-poppins">
                    {{ __('Update') }}
                </button>
            </div>
        </form>
    </div>
@endsection
