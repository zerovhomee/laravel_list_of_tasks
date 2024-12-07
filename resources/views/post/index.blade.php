@extends('layouts.main')
@section('content')
<div>
    @foreach($posts as $post)
        <div><a href="{{route('posts.show', $post->id)}}">{{$post->id}}.{{$post->title}}</a></div>
    @endforeach
</div>
@endsection
