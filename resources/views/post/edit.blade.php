@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('posts.update', $post->id) }}" method ="post">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="InputTitle1">Title</label>
            <input type="text" value="{{$post->title}}" class="form-control" name="title" id="InputTitle1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="InputDescription1">Description</label>
            <textarea type="text" name="description" class="form-control" id="InputDescripton1">{{$post->Description}}</textarea>
        </div>
        <div class="form-group">
            <label for="InputDate1">Date</label>
            <input type="date" value="{{$post->Date}}" class="form-control" name="date" id="InputDate1">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
