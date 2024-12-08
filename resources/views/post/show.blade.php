@extends('layouts.main')
@section('content')
<div>
    <div>{{$post->id}}.{{$post->title}}</div>
    <div>{{$post->date}}</div>
    <div>{{$post->description}}</div>
</div>
@if($post->user_id === Auth::id())
<div>
    <div><a href="{{route('posts.edit', $post -> id)}}" class="btn btn-info">Edit</a></div>
</div>
<div>
    <form action="{{route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
</div>
@endif
<div>
    <div><a href="{{route('posts.index')}}" class="btn btn-primary">Back</a></div>
</div>
@endsection
