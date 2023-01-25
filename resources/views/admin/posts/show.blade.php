@extends('layouts.admin')

@section('content')

<div class="card w-100 mb-3 pt-5 pb-5 border-0">
    <h2 class="text-uppercase">{{$singolo_post->title}}</h2>

    <p>
        {{$singolo_post->body}}
    </p>
</div>
    
@endsection