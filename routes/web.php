<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerieController;

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

Route::get('/', [SerieController::class,'index'])->name('index');
Route::get('/SeeMore/{id}', [SerieController::class,'show'])->name('SeeMore');
Route::get('/Create', [SerieController::class,'create'])->name('Create');
Route::post('/Create', [SerieController::class,'store'])->name('Store');
Route::get('/Edit/{id}', [SerieController::class,'edit'])->name('Edit');
Route::put('/Update/{id}', [SerieController::class,'update'])->name('Update');