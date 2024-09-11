<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::orderBy('title')->get();

        $title = 'HOME';

        return view('home', compact('movies', 'title'));
    }

    public function bestMovies(){

        $movies = Movie::where('vote', '>', 9)->orderBy('vote', 'desc')->get();

        $title = 'BEST MOVIES';

        return view('home', compact('movies', 'title'));
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }

    public function movieDetails($id){

        $movie = Movie::find($id);

        return view('movieDetails', compact('movie'));
    }

}
