@extends('layout')

@section('title', 'Update Post: ' . $post->title)

@section('content')
<h1>Update Post {{ $post->title }}</h1>

<form method="POST" action="{{ route('posts.update', [$post]) }}">
    @method('PUT')

    @csrf

    <label for="">Title</label>
    <input type="text" name="title" value="{{ old('title', $post->title) }}" class="@error('title') error-border @enderror" />

    @error('title')
        <div class="error">
            {{ $message }}
        </div>
    @enderror

    <label for="">Description</label>
    <textarea name="description" class="@error('description') error-border @enderror" >{{ old('description', $post->description) }}</textarea>
    @error('description')
        <div class="error">
            {{ $message }}
        </div>
    @enderror

    <button type="submit">Update</button>

</form>
@endsection
