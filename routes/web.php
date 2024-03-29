<?php

use App\Http\Controllers\Guest\ComicController as GuestComicController;

use Illuminate\Support\Facades\Route;

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

Route::get('/comics', [GuestComicController::class, 'index'])->name('guest.comics.index');
Route::post('/comics', [GuestComicController::class, 'store'])->name('guest.comics.store');
Route::get('/comics/create', [GuestComicController::class, 'create'])->name('guest.comics.create');
Route::get('/comics/{comic}', [GuestComicController::class, 'show'])->name('guest.comics.show');
Route::get('/comics/{comic}/edit', [GuestComicController::class, 'edit'])->name('guest.comics.edit');
Route::put('/comics/{comic}', [GuestComicController::class, 'update'])->name('guest.comics.update');
