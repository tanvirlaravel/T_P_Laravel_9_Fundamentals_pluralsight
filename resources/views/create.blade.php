@extends('layout')

@section('title', 'Create new Post')

@section('content')
<h1>Create a new blog post</h1>

<form method="POST" action="{{ route('posts.store') }}">

    @csrf

    <label for="">Title</label>
    <input type="text" name="title">

    <label for="">Description</label>
    <textarea name="description" ></textarea>

    <button type="submit">Submit</button>
    
</form>
@endsection
