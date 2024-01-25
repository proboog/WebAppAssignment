<?php

use App\Http\Controllers\AdminPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('createEvent', function () {
//     return view('createEvent');
// });

Route::get('/createEvent', [EventController::class, 'create'])->name('createEvent');

// Route::post('/storeEvent', [EventController::class, 'storeEvent'])->name('storeEvent');
Route::post('/createEvent', [EventController::class, 'storeEvent'])->name('storeEvent');

Route::get('/adminPage', function () {
    return view('adminPage');
})->name('adminPage');
// Route::post('/createEvent', 'EventController@storeEvent')->name('storeEvent');