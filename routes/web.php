<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ns1Controller;

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

// Route::resource('/posts', PostController::class);

Route::get('/ns1', [Ns1Controller::class, 'index']);
Route::get('/ns1/create', [Ns1Controller::class, 'create']);
Route::post('/ns1/create', [Ns1Controller::class, 'store']);
Route::get('edit_ns1/{id}/', [Ns1Controller::class, 'edit']);
Route::put('update/{id}', [Ns1Controller::class, 'update']);
Route::delete('delete/{id}', [Ns1Controller::class, 'destroy']);
// Route::get('delete/{id}', [Ns1Controller::class, 'destroy']);