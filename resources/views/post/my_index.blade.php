@extends('layouts.main')
@section('content')
<div>
    @foreach($posts as $post)
        <div><a href="{{route('posts.show', $post->id)}}">Author: {{$post->user->name}}. Event: {{$post->title}}. Date {{$post->date}}</a></div>
    @endforeach
</div>
@endsection
