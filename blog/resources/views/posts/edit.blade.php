@extends('layouts/app');

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ action('PostsController@update', [$post->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
        <input type="text" value="{{$post->title}}" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
        <textarea id="body" name="body" placeholder="Body">{{$post->body}}</textarea>
        </div>
        {{ method_field('PUT') }}
        <button type="submit" class="btn btn-default">Save</button>
    </form>
@endsection