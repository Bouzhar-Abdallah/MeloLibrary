<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\todosController;
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

Route::get('/', [todosController::class, 'index'] );

Route::post('/saveItem', [todosController::class, 'saveItem'] )->name('saveItem');
Route::post('/markComplete/{id}', [todosController::class, 'markComplete'] )->name('markComplete');
Route::post('/delete/{id}', [todosController::class, 'delete'] )->name('delete');


Route::get('/example',[UserController::class, 'show']);

