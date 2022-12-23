<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('db.comics');

    return view('comics', compact('comics'));
})->name('comics');

Route::get('/comic-detail/{id}', function($id){
    $comics = config('db.comics');
    $comic_get = array_filter($comics, fn($comic) => $comic['id'] == $id);
    $comic = $comic_get[array_key_first($comic_get)];

    return view('comic_detail', compact('comic'));
})->name('comic_detail');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');
Route::get('/fans', function () {
    return view('fans');
})->name('fans');
Route::get('/games', function () {
    return view('games');
})->name('games');
Route::get('/movies', function () {
    return view('movies');
})->name('movies');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/tv', function () {
    return view('tv');
})->name('tv');
Route::get('/videos', function () {
    return view('videos');
})->name('videos');
