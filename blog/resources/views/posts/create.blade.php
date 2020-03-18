@extends('layouts/app');

@section('content')
<h1>Create Post</h1>
<form action="{{ action('PostsController@store') }}" method="POST">
    @csrf
    <input type="text" id="title" name="title">
    <textarea id="body" name="body" placeholder="Body"></textarea>
    <button type="submit" class="btn btn-defaul">Save</button>
</form>
@endsection