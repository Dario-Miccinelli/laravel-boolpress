@extends('layouts.admin')

@section('content')
    <div class="card w-100 mb-3 pt-5 pb-5 border-0">
        <h2>Modifca il post: {{$post->title}}</h2>
    </div>

    <form action="{{ route('admin.posts.update', $post->id)}}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label class="form-label fw-bold" for="">Titolo</label>
            <input value="{{$post->title}}" class="form-control" type="text" name="title">
            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label class="form-label pt-3 fw-bold" for="">Descrizione post</label>
            <textarea  class="form-control" type="text" name="body">{{$post->body}}</textarea>
            @error('body')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        </div>

        <button type="submit" class="btn btn-success">Modifica</button>
    </form>
@endsection
