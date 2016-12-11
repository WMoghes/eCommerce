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
Route::get('/adminpanel/users/data', [
    'uses'          => 'UsersController@anyData',
    'as'            => 'adminpanel.users.data'
]);

Route::group(['middleware' => ['admin']], function(){

    Route::get('/adminpanel', [
        'uses'          => 'AdminController@index',
        'as'            => 'dashboard'
    ]);
    Route::resource('adminpanel/users', 'UsersController');
    Route::get('adminpanel/users/{id}/delete', 'UsersController@destroy');
});
Route::get('logout', 'AdminController@logout')->name('logout');