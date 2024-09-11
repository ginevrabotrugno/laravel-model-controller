{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

{{-- @dump($movies) --}}

<h1 class="text-center">
    HOME
</h1>

<div class="container d-flex justify-content-between flex-wrap">

    <div class="card mt-5" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>



</div>

@endsection

@section('title')
    HOME
@endsection
