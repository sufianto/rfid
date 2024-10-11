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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\BlogController;

Route::post('/blog', 'BlogController@store')->name('blog.store');
Route::put('/blog', 'BlogController@store')->name('blog.store');
Route::delete('/blog/{blog}', 'BlogController@destroy')->name('blog.destroy');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/search', [BlogController::class, 'search'])->name('search');


use App\Http\Controllers\TasksController;
Route::resource('tasks', 'TasksController');