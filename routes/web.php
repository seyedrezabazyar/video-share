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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/videos/create', [\App\Http\Controllers\VideoController::class, 'create'])->name('videos.create');
Route::post('/videos', [\App\Http\Controllers\VideoController::class, 'store'])->name('videos.store');
Route::get('/videos/{video}', [\App\Http\Controllers\VideoController::class, 'show'])->name('videos.show');
Route::get('/videos/{video}/edit', [\App\Http\Controllers\VideoController::class, 'edit'])->name('videos.edit');
Route::post('/videos/{video}', [\App\Http\Controllers\VideoController::class, 'update'])->name('videos.update');

Route::get('categories/{category:slug}/videos', [\App\Http\Controllers\CategoryVideoController::class, 'index'])->name('categories.videos.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
