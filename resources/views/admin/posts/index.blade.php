@extends('layouts.admin')

@section('content')
    {{-- post --}}
    <div class="w-75 mb-3 m-auto">
        <a class="" href="{{ route('admin.posts.create') }}">
            <button type="button" class="btn btn-outline-light mb-3 mt-2 w-75 m-auto">Crea un nuovo post </button>
        </a>
    </div>
    {{-- {{ dd($posts) }} --}}
    @foreach ($posts as $elem)
        <div class="card w-75 mb-3 m-auto">
            <div class="card-body">
                <a class="text-decoration-none text-danger-emphasis" href="{{ route('admin.posts.show', $elem->id) }}">
                    <h5 class="card-title fw-bold text-uppercase text-decoration-none">
                        {{ $elem->title }}
                    </h5>
                </a>


                <h5 class="text-success text-uppercase">
                    @if ($elem->category)
                        {{ $elem->category['name'] }}
                    @endif
                </h5>


                <p class="card-text">{{ $elem->body }}</p>


                <p class="card-text">

               
                </p>




                <div>

                    {{-- edit --}}

                    <div class="d-flex flex-wrap">
                        <a href="{{ route('admin.posts.edit', $elem->id) }}" class="fs-5 text-white">
                            <i class="fa-solid fa-pen "></i>
                        </a>


                        {{-- delete --}}


                        <form action="{{ route('admin.posts.destroy', $elem->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="bg-dark text-white border-0 fs-5 pb-1">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>

                    </div>


                </div>


            </div>
        </div>
    @endforeach


    {{ $posts->links() }}
@endsection
