@extends('layouts.main')
@section('content')
<div>
    <div class="card">
        <h5 class="card-header">{{$post->date}}</h5>
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}
            </h5>
            <p class="card-text">{{$post->description}}</p>
            <div class="row">
                <div class="col-4">
                    <a href="{{route('posts.index')}}" class="btn btn-primary">Back</a>
                    @if($post->user_id === Auth::id())
                        <a href="{{route('posts.edit', $post -> id)}}" class="btn btn-info">Edit</a>
                        <form action="{{route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
