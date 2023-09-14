<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

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
Route::get('songs', function () {
    return view('index');
});
Route::get('songs', function () {
    return view('edit');
});
Route::get('songs', function () {
    return view('creat');
});
Route::get('songs', function () {
    return view('show');
});



Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/{index}', [SongController::class, 'show']);
Route::get('/songs/create', [SongController::class, 'create']);
Route::get('/songs/{index}/edit', [SongController::class, 'edit']);




