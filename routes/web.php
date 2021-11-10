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

// Route::get('/', function () {
//     return view('guest.home');
// });

Auth::routes();



Route::middleware(['auth'])->name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('dishes', 'DishController');
    Route::resource('orders', 'OrderController');

    Route::get('/{any}', function () {
        abort(404);
    });
});

Route::get('/restaurant/{id}', function($id) {
    return view('guest.show', compact('id'));
});
Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');
