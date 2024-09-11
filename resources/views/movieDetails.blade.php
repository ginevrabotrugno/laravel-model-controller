{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<h1 class="text-center">
    {{ $movie->title }}
</h1>

<div class="container-lg">

    <p class="text-center">
        <strong>Titolo Originale: </strong> {{ $movie->original_title }} <br>
        <strong>Naizonalità: </strong> {{ $movie->nationality }} <br>
        <strong>Voto: </strong> {{ $movie->vote }}
    </p>

</div>

@endsection
