@extends('layouts/app');

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
<form action="{{ action('PostsController@destroy', [$post->id]) }}" method="POST">
    @csrf
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection