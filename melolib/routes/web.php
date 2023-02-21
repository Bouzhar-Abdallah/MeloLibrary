<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\FileUploadController;

//use App\Http\Middleware\UserMiddleware;
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
    $user = auth()->user();
    //dd($user->userRole->role->name);
    
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Route::get('/test', function () {
    return view('test');
});

*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix' => 'admin','middleware'=>['auth',\App\Http\Middleware\AdminMiddleware::class]], function () {
    Route::get('dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::get('/song/new', [SongController::class, 'index'])->name('admin.song');
    Route::post('/song/save', [SongController::class, 'save'])->name('admin.song.save');
});

//route for executive


//route for user
Route::group(['prefix' => 'user','middleware'=>['auth',\App\Http\Middleware\UserMiddleware::class]], function () {
    Route::get('/', [DashboardController::class, 'user'])->name('user');
});

Route::get('/upload',[FileUploadController::class, 'showUploadForm']);
Route::post('/upload',[FileUploadController::class, 'storeUploads']);



require __DIR__.'/auth.php';
