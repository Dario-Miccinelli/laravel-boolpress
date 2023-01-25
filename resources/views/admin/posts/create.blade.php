@extends('layouts.admin')

@section('content')
    <div class="card w-100 mb-3 pt-5 pb-5 border-0">
        <h2>Crea un post</h2>
    </div>

    <form action="{{ route('admin.posts.store') }}" method="POST">

        @csrf

        <div>
            <label class="form-label fw-bold" for="">Titolo</label>
            <input class="form-control" type="text" name="title">
            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label class="form-label pt-3 fw-bold" for="">Descrizione post</label>
            <textarea class="form-control" type="text" name="body"></textarea>
            @error('body')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        </div>

        <button type="submit" class="btn btn-success">Crea</button>
    </form>
@endsection
