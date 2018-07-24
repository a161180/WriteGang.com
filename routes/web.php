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

Auth::routes();

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

// Route::get('/home','ProductController@index')->name('users');

//this route is to call page homepage
Route::get('/homepage', function(){
    return view('homepage');
});



//this route is used to show article
Route::post('/article','ArticleController@index')->name('articlee.index');


//this route is used to store article
Route::post('/storearticle','ArticleController@store')->name('articlee.store');


Route::prefix('admin')->group(function(){
    Route::get('/', 'AdminHomeController@index');
    Route::get('/article', 'AdminHomeController@showarticle')->name('admin.show.article');
    Route::get('/poem', 'AdminHomeController@showpoem')->name('admin.show.poem');
    Route::get('/articledetail/{id}', 'AdminHomeController@articledetail')->name('admin.article.detail');
    Route::get('/poemdetail/{id}', 'AdminHomeController@poemdetail')->name('admin.poem.detail');
    Route::delete('/articledelete/{id}', 'AdminHomeController@articledelete')->name('admin.article.delete');
    Route::delete('/poemdelete/{id}', 'AdminHomeController@poemdelete')->name('admin.poem.delete');
    Route::get('/article/showedit/{id}', 'AdminHomeController@showedit')->name('admin.article.showedit');
    Route::get('/poem/showedit/{id}', 'AdminHomeController@showeditpoem')->name('admin.poem.showedit');
    Route::patch('/article/showedit/edit/{id}', 'AdminHomeController@showeditedit')->name('admin.article.showeditedit');
    Route::patch('/poem/showedit/edit/{id}', 'AdminHomeController@showediteditpoem')->name('admin.poem.showeditedit');

});

Route::prefix('user')->group(function(){
    Route::get('/', 'UserHomeController@index');
    Route::get('/article', 'UserHomeController@showarticle')->name('user.show.article');
    Route::get('/articledetail/{id}', 'UserHomeController@articledetail')->name('user.article.detail');
    Route::get('/submitarticle', 'UserHomeController@submitarticle')->name('user.submit.article');
    Route::post('/articleprocess', 'UserHomeController@articleprocess')->name('user.article.process');
    Route::get('/article/showedit/{id}', 'UserHomeController@showedit')->name('user.article.showedit');
    Route::patch('/article/showedit/edit/{id}', 'UserHomeController@showeditedit')->name('user.article.showeditedit');
    Route::delete('/articledelete/{id}', 'UserHomeController@articledelete')->name('user.article.delete');
    Route::get('/poem', 'UserHomeController@showpoem')->name('user.show.poem');
    Route::get('/poemdetail/{id}', 'UserHomeController@poemdetail')->name('user.poem.detail');
    Route::get('/submitpoem', 'UserHomeController@submitpoem')->name('user.submit.poem');
    Route::post('/poemprocess', 'UserHomeController@poemprocess')->name('user.poem.process');
    Route::get('/poem/showedit/{id}', 'UserHomeController@showeditpoem')->name('user.poem.showedit');
    Route::patch('/poem/showedit/edit/{id}', 'UserHomeController@showediteditpoem')->name('user.poem.showeditedit');
    Route::delete('/poemdelete/{id}', 'UserHomeController@poemdelete')->name('user.poem.delete');

});



Route::post('/login-submit', 'Auth\LoginController@loginSubmit')->name('login.submit');
Route::post('/login-submit', 'Auth\LoginController@loginSubmit')->name('login.submit');


Route::resource('article', 'ArticleController');
Route::resource('poem', 'PoemController');

Route::post('/login/custom', 'LoginController@login')->name('login.custom');

Route::group(['middleware'=>'auth'], function(){
    Route::get('user', function(){
        return view('user.userwelcome');
    })->name('user');
    Route::get('admin', function(){
        return view('admin.adminwelcome');
    })->name('admin');
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



Route::get('/article1', function(){
    return view('article1');
});

Route::get('/article2', function(){
    return view('article2');
});

Route::get('/article3', function(){
    return view('article3');
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

Route::get('/poemhome', 'PoemController@index')->name('poem.index');
Route::get('/poem-detail/{id}', 'PoemController@show')->name('poem.detail');

Route::get('/articlehome', 'ArticleController@index')->name('article.index');
Route::get('/article-detail/{id}', 'ArticleController@show')->name('article.detail');

