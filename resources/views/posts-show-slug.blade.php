@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection