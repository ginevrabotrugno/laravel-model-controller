<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/best-movies', [PageController::class, 'bestMovies'])->name('bestMovies');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::get('/movie-details/{id}', [PageController::class, 'movieDetails'])->name('movieDetails');


