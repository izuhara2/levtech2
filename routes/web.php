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

<<<<<<< HEAD
Route::get('/', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');
<<<<<<< HEAD
=======

>>>>>>> 4ee560f05a887bac67ca51e2f40c90d3db15abee
=======
/*
Route::get('/', function () {
    return view('index');
});
*/
Route::get('/', 'PostController@index');
>>>>>>> refs/remotes/origin/master
