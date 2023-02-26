@extends('master')
@section('meta')
    <title>posts List</title>
@endsection
@section('content')
    <div class="w-full p-2 font-rubik min-h-[100vh] sm:min-h-[100vh] lg:min-h-[100vh]">
        <h1 class="text-emerald-400 text-xl sm:text-xl lg:text-2xl pl-3 sm:pl-3 sl:pl-5 font-poppins font-bold mb-5">
            Posts List :
        </h1>
        <div class="w-full flex flex-col justify-center items-center gap-2 sm:gap-2 lg:gap-5 pl-3 sm:pl-3 sl:pl-5">
            @php
                $increment = 1;
            @endphp
            @if (count($posts) >0 )
                @foreach ($posts as $post)
                    <div class="text-slate-200 w-[95%] flex flex-col gap-3 border-2 border-slate-800 rounded-md">
                        <div class="w-full flex flex-row justify-between items-center p-2">
                            <h1 class="pl-2 text-slate-200 text-base sm:text-base lg:text-xl">Post {{ $increment++ }} </h1>
                            <a href="{{ route("posts.post" , $post) }}" class="bg-indigo-700 p-2 rounded-full hover:bg-indigo-600 visited:bg-indigo-700">
                                <i class="fa-regular fa-eye text-slate-200"></i>
                            </a>
                        </div>
                        <div class="pl-4">
                            <h3>- by : {{ $post->user->name }}</h3>
                        </div>
                        <div class="pl-4">
                            <h3>- title :</h3>
                            <p class="pl-3">{{ $post->title }}</p>
                        </div>
                        <div class="pl-4">
                            <h3>- content :</h3>
                            <p class="pl-3">{{ $post->content }}</p>
                        </div>
                        <div class="pl-4">
                            <p>- at {{ $post->created_at }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>the are no posts yet </p>
            @endif
        </div>
    </div>
@endsection
