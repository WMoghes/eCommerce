<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::auth();

//Route::get('/home', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web', 'admin']], function(){
    Route::get('/adminpanel', [
        'uses'          => 'AdminController@index',
        'as'            => 'dashboard'
    ]);
});
