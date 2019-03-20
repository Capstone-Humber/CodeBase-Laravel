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





Route::get('/', 'PagesController@index');
//newsletter
Route::get('/index', 'PagesController@index');
Route::post('/index','PagesController@store');



Route::get('/weather', function () {
    return view('weather');
});

Route::get('contactus', 'ContactUSController@contactUS');
Route::post('contactus', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

Route::get('/admin', 'PageController@index');
Route::resource('blogs', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/contactus', function () {
//    return view('contactus');
//});


Route::get('/sport', function () {
    return view('sport');
});

Route::get('/advert', function () {
    return view('advert');
});

Route::get('/columnist', function () {
    return view('columnist');
});

Route::get('/editorials', function () {
    return view('editorials');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/forums', function () {
    return view('forums');
});

Route::get('/lifestyle', function () {
    return view('lifestyle');
});

Route::get('/month', function () {
    return view('month');
});

Route::get('/obituaries', function () {
    return view('obituaries');
});

Route::get('/photo', function () {
    return view('photo');
});


Route::get('/albums/index','AlbumsController@index');
Route::get('/albums','AlbumsController@index');
Route::get('/albums/create','AlbumsController@create');
Route::get('/albums/{id}','AlbumsController@show');
Route::post('/albums/store','AlbumsController@store');
Route::post('/photos/store','PhotosController@store');
Route::get('/photos/create/{id}','PhotosController@create');
Route::get('/photos/{id}','PhotosController@show');
Route::delete('/photos/{id}','PhotosController@destroy');



Route::get('/politics', function () {
    return view('politics');
});

Route::get('/tech', function () {
    return view('tech');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/who', function () {
    return view('who');
});
Route::get('/world', function () {
    return view('world');
});

Route::get('/radio', function () {
    return view('radio');
});

Route::get('/television', function () {
    return view('television');
});
Route::get('/canada', function () {
    return view('canada');
});
