<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Route::get('/users/{id}', function ($id) {
    return "You are the best " . $id ;
});
|
*/

Route::get('/', 'WebController@home');

Route::resource('posts', 'WebController');
Route::post('posts/create', 'WebController@store');


