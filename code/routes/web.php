<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

//Route::get('/', function () {
//    return view('welcome');
//})->name('index');

Auth::routes();
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('animals')->group(function() {
    Route::get('/', [App\Http\Controllers\TeamsController::class, 'index'])->name('animals');
    Route::get('{id}', [App\Http\Controllers\TeamsController::class, 'indexItem'])->where('id', '([A-Za-z0-9\-\/]+)')->name('animals.item');
});

Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');

Route::prefix('news')->group(function() {
    Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
    Route::get('{id}', [App\Http\Controllers\NewsController::class, 'indexItem'])->where('id', '([A-Za-z0-9\-\/]+)')->name('news.item');
});

Route::prefix('contacts')->group(function() {
    Route::match(['get', 'post'], '/', [App\Http\Controllers\ContactsController::class, 'index'])->name('contacts');
});

Route::get('/send-email', 'FeedbackController@send');

