@extends('master')
@section('meta')
    <title>posts List</title>
@endsection
@section('content')
    <script defer src=@vite('resources/js/posts.js')></script>
    <div
        class="w-full flex flex-col gap-5 pl-3 sm:pl-3 lg:pl-5 font-rubik min-h-[100vh] sm:min-h-[100vh] lg:min-h-[100vh] mb-10">
        @if (session()->has('success'))
            <div class="text-gray-700 bg-emerald-500 rounded p-3 mb-2 m-3">
                {{ session()->get('success') }}
            </div>
        @endif

        <div class="w-full flex justify-between px-5 mb-3 items-center">
            <h1 class="text-emerald-400 text-xl sm:text-xl lg:text-2xl font-poppins font-bold ">
                Posts List :
            </h1>
            <a href="{{ route('posts.create_post') }}"
                class="flex p-2 flex-row items-center gap-2 bg-indigo-600 hover:bg-indigo-500 rounded">
                <i class="fa-solid fa-plus text-slate-200 text-md sm:text-md lg:text-lg"></i>
                <span class="text-slate-200 text-md sm:text-md lg:text-base">Create post</span>
            </a>
        </div>
        <div class="w-full flex flex-col justify-center items-center gap-2 sm:gap-2 lg:gap-5">
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div id="deletePostModal"
                        class="flex flex-col gap-4 font-poppins bg-gray-800 fixed top-[10%] transition-all duration-500 -translate-y-[500px] p-2 rounded z-10 right-[50%] translate-x-[50%] w-fit">
                        <div class="flex flex-row justify-end w-full">
                            <button class="hover:bg-gray-600 text-gray-600 hover:text-gray-200 rounded-full p-1"
                                name="btn_closeModal">
                                <i class="fa-solid fa-x "></i>
                            </button>
                        </div>
                        <div class="flex flex-row justify-center">
                            <i class="fa-solid fa-circle-exclamation text-gray-600 text-2xl sm:text-2xl lg:text-5xl"></i>
                        </div>
                        <div class="w-full p-1">
                            <p class="text-slate-200">Are you sure you want to delete this post ?</p>
                        </div>
                        <div class="w-full flex flex-row items-center justify-around">
                            <button onclick="location.href='{{ route('posts.delete_post', $post) }}'"
                                class="bg-red-600 text-slate-200 hover:bg-red-500 rounded px-3 py-2">
                                Yes
                            </button>
                            <form action="{{ route("posts.delete_post" , $post) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="no_btn" class="bg-slate-600 text-slate-200 hover:bg-slate-500 rounded px-3 py-2">
                                    No
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="w-[95%] flex flex-col gap-3 border-2 border-slate-800 rounded-md">
                        <div class="w-full flex flex-row justify-between items-center p-2">
                            <h1 class="pl-2 text-slate-200 text-base sm:text-base lg:text-xl">Post {{ $post->id }} </h1>
                            <div class="flex flex-row gap-1 items-center">
                                <a href="{{ route('posts.post', $post) }}"
                                    class="bg-indigo-700 p-2 rounded-full hover:bg-indigo-600 ">
                                    <i class="fa-regular fa-eye text-slate-200"></i>
                                </a>
                                <a href="{{ route('posts.update_postForm', $post) }}"
                                    class="bg-amber-500 p-2 rounded-full hover:bg-amber-400 ">
                                    <i class="fa-solid fa-pen-to-square text-slate-200"></i>
                                </a>
                                <button name="btn_openModal" class="bg-red-600 p-2 rounded-full hover:bg-red-500">
                                    <i class="fa-solid fa-trash text-slate-200"></i>
                                </button>
                            </div>
                        </div>
                        <div class="pl-4 text-slate-200">
                            <h3>- by : {{ $post->user->name }}</h3>
                        </div>
                        <div class="pl-4 text-slate-200">
                            <h3>- title :</h3>
                            <p class="pl-3">{{ $post->title }}</p>
                        </div>
                        <div class="pl-4 text-slate-200">
                            <h3>- content :</h3>
                            <p class="pl-3">{{ $post->content }}</p>
                        </div>
                        <div class="pl-4 text-slate-200">
                            <p>- at {{ $post->created_at }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-slate-200 text-xl">the are no posts yet </p>
            @endif
        </div>
    </div>
@endsection
