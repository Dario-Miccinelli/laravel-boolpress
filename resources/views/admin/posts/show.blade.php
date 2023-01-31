@extends('layouts.admin')

@section('content')

<div class="card w-100 mb-3 pt-5 pb-5 border-0 p-5">

    <h2 class="text-uppercase ">{{$singolo_post->title}}</h2>
    <p class="">
        {{$singolo_post->body}}
    </p>

    <img class="img-fluid" src="{{ asset("storage/$singolo_post->cover") }}" alt="">
</div>
    
@endsection