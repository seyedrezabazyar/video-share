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

Route::get('/factory', function (){
    \App\Models\Video::factory()->create();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('videos', [\App\Http\Controllers\VideoController::class, 'index']);
