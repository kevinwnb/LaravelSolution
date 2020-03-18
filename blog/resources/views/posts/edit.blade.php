@extends('layouts/app');

@section('content')
<h1>Edit Post</h1>
<form action="{{ action('PostsController@update', [$post->id]) }}" method="POST">
    @csrf
<input type="text" id="title" name="title" value="{{$post->title}}">
    <textarea id="body" name="body" placeholder="Body">{{$post->body}}</textarea>
    {{ method_field('PUT') }}
    <button type="submit" class="btn btn-defaul">Save</button>
</form>
@endsection