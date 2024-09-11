{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<h1 class="text-center">
    {{ $title }}
</h1>

<div class="container d-flex justify-content-between flex-wrap">

    @foreach ($movies as $movie)

        <div class="card mt-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> {{ $movie->title }} </h5>
                <h6 class="card-subtitle mb-2 text-muted"> {{ $movie->original_title }} </h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nazionalità: </strong> {{ $movie->nationality }} </li>
                <li class="list-group-item"><strong>Voto: </strong> {{ $movie->vote }} </li>
            </ul>
            <a href=" {{route('movieDetails', ['id' => $movie->id])}} " class="btn btn-primary">DETTAGLI</a>
        </div>


    @endforeach



</div>

@endsection

@section('title')
    HOME
@endsection
