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

//Route::get('/login' , function (){
//    $user = \App\Models\User::find(1);
//    \Illuminate\Support\Facades\Auth::login($user);
//    $response = \Illuminate\Support\Facades\Auth::check();
//    dd(\Illuminate\Support\Facades\Auth::user()); ### user information
//    dd($response); ### true or false
//});

//Route::get('/login', function () {
//    $response = \Illuminate\Support\Facades\Auth::attempt([
//        'email' => 'kiana.hamidi@example.com',
//        'password' => 'password',
//    ]);
//    dd($response); ### true or false
//
//    ### مثال کد برای لاگین کردن
//    #if ($response) {
//    #    \Illuminate\Support\Facades\Auth::login($user);
//    #}
//});

//Route::get('/login', function () {
//    // $response = \Illuminate\Support\Facades\Auth::guard('admin')->check(); ### not defined
//    // $response = \Illuminate\Support\Facades\Auth::guard('web')->check(); ### false
//    $response = \Illuminate\Support\Facades\Auth::guard()->check(); ### default is "web"
//
//    dd($response);
//});

Route::get('/login', function () {
    \Illuminate\Support\Facades\Auth::onceBasic();
});


