@extends('posts')

@section('content')
    <h2>Your posts is</h2>

    <ul>
        @foreach($posts as $post)
            <li>
                <span>{!! $post->name !!}</span>

                <p>{{ $post->body }}</p>
            </li>
        @endforeach
    </ul>
@endsection