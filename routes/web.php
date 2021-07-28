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
    return view('welcome');
});

Route::get('/create', [App\Http\Controllers\AllNotesController::class, 'create_get']);

Route::post('/create', [App\Http\Controllers\AllNotesController::class, 'create_post']);

Route::get('/note/{username}/{id}', [App\Http\Controllers\AllNotesController::class, 'delete_note']);

Route::get('/update/{username}/{id}', [App\Http\Controllers\AllNotesController::class, 'update_get']);

Route::post('/update/{username}/{id}', [App\Http\Controllers\AllNotesController::class, 'update_post']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');