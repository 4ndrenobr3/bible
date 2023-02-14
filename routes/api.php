<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\VerseController;
use App\Http\Controllers\VersionController;
use App\Http\Controllers\TestamentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/versions', [ VersionController::class, 'index' ])->name('versions.index');
Route::get('/testaments', [ TestamentController::class, 'index' ])->name('testaments.index');
Route::get('/books', [ BookController::class, 'index' ])->name('books.index');
Route::get('/verses/{book}', [ VerseController::class, 'index' ])->name('verses.index');
