
@extends("master")
@section("meta")
    <title>posts List</title>
@endsection
@section("content")
    <h1>Posts List</h1>
    @if (count($posts))
       <ul>
        @foreach ($posts as $post)
            <li>
                <h3>{{$post ->title }}</h3>
                <small>{{$post -> created_at}}</small>
            </li>
        @endforeach
       </ul>
    @else 
        <p>the are no posts yet  </p>
    @endif
@endsection