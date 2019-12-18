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

Route::get('/', function () {
    return view('homepage');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/students' , ['middleware'=>'auth',function () {
    return view('students');
}]);
Route::get('/admin', ['middleware'=>'auth', function () {
    return view('admin');
}]);
Route::get('/teachers',['middleware'=>'auth', function () {
    return view('teachers');
}]);
Route::resource('teacher','TeachersController');
Route::resource('files','FilesController');
Route::resource('teachers','FilesController@destroy');
Route::get('inc.list', 'TeachersController@index');
Route::get('teachers','FilesController@index');
Route::get('students','FilesController@downloadFunc');
Route::get('admin', 'TeachersController@index');
Auth::routes();

//Route::get('/home', 'HomeController@index');
