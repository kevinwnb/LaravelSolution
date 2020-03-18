@extends('layouts/app');

@section('content')
    <h1>Create Post</h1>
    <form action="{{ action('PostsController@store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" placeholder="Body"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Save</button>
    </form>
@endsection