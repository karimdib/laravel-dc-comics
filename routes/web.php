<?php

use App\Http\Controllers\ComicsController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/comics', [ComicsController::class, 'index'])->name('comics.index');
Route::get('/comics/create', [ComicsController::class, 'create'])->name('comics.create');
Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store');
Route::get('/comics/{comic}', [ComicsController::class, 'show'])->name('comics.show');
Route::get('/comics/{comic}/edit', [ComicsController::class, 'edit'])->name('comics.edit');
Route::put('/comics/{comic}', [ComicsController::class, 'update'])->name('comics.update');
Route::delete('/comics/{comic}', [ComicsController::class, 'destroy'])->name('comics.destroy');
