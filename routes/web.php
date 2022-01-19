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
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('create-category' , 'App\Http\Controllers\CategoryController@create');
Route::post('post-category-form' , 'App\Http\Controllers\CategoryController@store');
Route::get('all-categories' , 'App\Http\Controllers\CategoryController@index');
Route::get('edit-category/{id}' , 'App\Http\Controllers\CategoryController@edit');
Route::post('update-category/{id}' , 'App\Http\Controllers\CategoryController@update');
Route::get('delete-category/{id}' , 'App\Http\Controllers\CategoryController@destroy');
Route::get('get-blog-post-form' , 'App\Http\Controllers\BlogPostController@create');
Route::post('store-blog-post', 'App\Http\Controllers\BlogPostController@store');
Route::get('all-blogs', 'App\Http\Controllers\BlogPostController@index');
Route::get('edit-blog/{id}', 'App\Http\Controllers\BlogPostController@edit');
Route::get('delete-blog/{id}', 'App\Http\Controllers\BlogPostController@destroy');
Route::post('update-blog/{id}' , 'App\Http\Controllers\BlogPostController@update');



