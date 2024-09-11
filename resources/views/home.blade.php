{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

@dump($movies)

@endsection

@section('title')
    HOME
@endsection
