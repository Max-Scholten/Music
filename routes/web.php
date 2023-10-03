<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');

Route::get('/songs/{index}', [SongController::class, 'show'])->name('songs.show');
Route::get('/songs/{index}/edit', [SongController::class, 'edit'])->name('songs.edit');
Route::put('/songs/{song}', [SongController::class, 'update'])->name('songs.update');
Route::post('/songs/', [SongController::class, 'store'])->name('songs.store');
Route::delete('/songs/{song}', [SongController::class, 'destroy'])->name('songs.destroy');


//Route::get('/songs/{index}/edit', [SongController::class, 'edit'])->name('songs.edit');

Route::get('/bands', [BandController::class, 'index'])->name('bands.index');
Route::get('/bands/create', [BandController::class, 'create'])->name('bands.create');

Route::get('/bands/{index}', [BandController::class, 'show'])->name('bands.show');
Route::get('/bands/{index}/edit', [BandController::class, 'edit'])->name('bands.edit');
Route::put('/bands/{band}', [BandController::class, 'update'])->name('bands.update');
Route::post('/bands/', [BandController::class, 'store'])->name('bands.store');
Route::delete('/bands/{band}', [BandController::class, 'destroy'])->name('bands.destroy');


//Route::get('/bands/{index}/edit', [BandController::class, 'edit'])->name('bands.edit');

Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create');

Route::get('/albums/{index}', [AlbumController::class, 'show'])->name('albums.show');
Route::get('/albums/{index}/edit', [AlbumController::class, 'edit'])->name('albums.edit');
Route::put('/albums/{album}', [AlbumController::class, 'update'])->name('albums.update');
Route::post('/albums/', [AlbumController::class, 'store'])->name('albums.store');
Route::delete('/albums/{album}', [AlbumController::class, 'destroy'])->name('albums.destroy');


//Route::get('/albums/{index}/edit', [BandController::class, 'edit'])->name('albums.edit');






