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
    return view('welcome');
});

Route::get('welcome',function (){
    echo "Hello Boy !";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products','HomeController@getform')->name('get.products');
Route::get('/display-discount','HomeController@displayResult')->name('display.result');


Route::post('/products','HomeController@postform')->name('post.products');
