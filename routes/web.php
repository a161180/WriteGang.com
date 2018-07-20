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

//this route for product
//this route is used to show all products
Route::get('/product','ProductController@index')->name('product');

//this route is used to show create page
Route::get('/create','ProductController@create')->name('create');

//this route is used to show detail product
Route::get('/show/{id}','ProductController@show')->name('show');

//this route is used to show edit page
Route::get('/edit/{id}','ProductController@edit')->name('edit');

//this route is used to store product
Route::post('/store','ProductController@store')->name('store');

//this route is used to update product
Route::put('/update/{id}','ProductController@update')->name('update');

//this route is used to delete product
Route::delete('/delete/{id}','ProductController@destroy')->name('delete');

Route::get('/home','ProductController@index')->name('users');

//this route is to call page homepage
Route::get('/homepage', function(){
    return view('homepage');
});

Route::get('/signin', function(){
    return view('signin');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/adminhome', function(){
    return view('adminhome');
});

Route::get('/adminpoem', function(){
    return view('adminpoem');
});

Route::get('/adminarticle', function(){
    return view('adminarticle');
});

Route::get('/adminuser', function(){
    return view('adminuser');
});

Route::get('/articlehome', function(){
    return view('articlehome');
});

Route::get('/article1', function(){
    return view('article1');
});

Route::get('/article2', function(){
    return view('article2');
});

Route::get('/article3', function(){
    return view('article3');
});

Route::get('/poemhome', function(){
    return view('poemhome');
});

Route::get('/poemseeuser', function(){
    return view('poemseeuser');
});

Route::get('/userhome', function(){
    return view('userhome');
});

Route::get('/userpostedwriteups', function(){
    return view('userpostedwriteups');
});

Route::get('/userpostwriteuparticle', function(){
    return view('userpostwriteuparticle');
});

Route::get('/userpostwriteupoem', function(){
    return view('userpostwriteupoem');
});

Auth::routes();