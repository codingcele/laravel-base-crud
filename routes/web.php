<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;


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

// INDEX
Route::get('/', [MainController::class, 'home']) -> name('home');

// SHOW
Route::get('/saint/show/{saint}', [MainController::class, 'show']) -> name('saint.show'); 

// DELETE
Route::get('/saint/destroy/{id}', [MainController::class, 'saintDestroy']) -> name('saint.destroy');

// CREATE
Route::get('/saint/create', [MainController::class, 'saintCreate']) -> name('saint.create');
Route::post('/saint/store', [MainController::class, 'saintStore']) -> name('saint.store');

// UPDATE
Route::get('/saint/edit/{saint}', [MainController::class, 'saintEdit']) -> name('saint.edit');
Route::post('/saint/update/{saint}', [MainController::class, 'saintUpdate']) -> name('saint.update');