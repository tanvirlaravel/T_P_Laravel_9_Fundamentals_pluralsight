@extends('layout')

@section('title', $post->title)

@section('content')

<div class="post-item">
    <div class="post-content">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->description }}</p>
        <a href="{{ route('posts.edit', [$post]) }}" >Edit </a>
        <form  method="POST" action="{{ route('posts.destroy', [$post]) }}" >
            @csrf
            @method('DELETE')
            <button class="delete" type="submit">Delete</button>
        </form>
    </div>
</div>
@endsection
