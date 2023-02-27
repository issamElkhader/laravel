@extends('master')
@section('meta')
    <title>post details</title>
@endsection
@section('content')
    @if ($post)
        <div class="w-full min-h-screen sm:min-h-screen lg:min-h-[100vh] p-2 text-slate-200">
            <div class="w-full flex flex-col gap-3">
                <h1 class="text-emerald-400 text-xl sm:text-xl lg:text-2xl pl-3 sm:pl-3 sl:pl-5 font-poppins font-bold mb-5 ">
                    Post Details</h1>
                <div class="pl-4 w-full flex flex-col justify-center items-center">
                    <div class="w-[96%] flex flex-col gap-3">
                        <div class="w-full">
                            <h4 class="capitalize">- By : {{ $post->user->name }}</h4>
                        </div>
                        <div class="w-full">
                            <h4 class="capitalize">- User Id : {{ $post->user_id }}</h4>
                        </div>
                        <div class="w-full">
                            <h4 class="capitalize">- Post Id : {{ $post->id }}</h4>
                        </div>
                        <div class="w-full">
                            <h4 class="capitalize">- title :</h4>
                            <p class="pl-7">{{ $post->title }}</p>
                        </div>
                        <div class="w-full">
                            <h4 class="capitalize">- content :</h4>
                            <p class="pl-7">{{ $post->content }}</p>
                        </div>
                        <div class="w-full">
                            <h4 class="capitalize">- published at {{ $post->created_at->format('d/m/Y H:i:s') }}</h4>
                        </div>
                        <div class="w-full">
                            <h4 class="capitalize">- updated at {{ $post->updated_at->format('d/m/Y H:i:s') }}</h4>
                        </div>
                        <div class="w-full flex flex-col justify-center items-center gap-2">
                            <h2 class="w-full">- Comments List :</h2>
                            <div class="w-[94%] flex flex-col gap-2">
                                @php
                                    $comments = $post->comments;
                                    $increment_2 = 1 ;
                                @endphp
                                @if (count($comments) > 0)
                                    @foreach ($comments as $comment)
                                        <div class="ml-2 w-full">
                                            <a href="#" class="hover:text-indigo-600 visited:text-slate-200">
                                                <p> <span class="text-indigo-600">{{ $increment_2++ }}</span> - {{ $comment->body }}</p>
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <p>no comments yet</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @else
        <p>post doesnt exists anymore</p>
    @endif
@endsection
