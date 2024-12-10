@extends('layouts.main')
@section('content')
<div>
    @foreach($posts->sortBy('date') as $post)
    <ol class="list-group list-group">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold"><a href="{{route('posts.show', $post->id)}}">Event: {{$post->title}}</a></div>
                Author: {{$post->user->name}}
            </div>
            <span class="badge bg-primary rounded-pill">{{$post->date}}</span>
        </li>
    </ol>
    @endforeach
    <div class ="mt-5 g-4">
        {{ $posts->links('pagination::bootstrap-4')}}
    </div>
</div>
@endsection
