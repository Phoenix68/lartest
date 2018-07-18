<?php

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


Route::get('/hello', function () {
    return 'hello';
});

Route::get('/users/{id}/{name}',function ($id, $name){
   return 'This is user '.$id." ".$name;
});

Route::get('/welcome','PagesController@welcome');
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('/posts','PostsController');