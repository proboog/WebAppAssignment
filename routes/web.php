<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\JoinEventController;

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
});
// Route::get('/joinEvent', function () {
//     return view('joinEvent');
// });

Route::get('/joinEvent', [JoinEventController::class, 'joinEvent'])->name('joinEvent');

// Route::post('/createEvent', 'EventController@storeEvent')->name('storeEvent');

Route::get('/eventManage', function () {
    return view('eventManage'); 
});