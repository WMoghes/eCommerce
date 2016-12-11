<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


/*
|--------------------------------------------------------------------------
| Admin Users Routes
|--------------------------------------------------------------------------
*/

Route::auth();
Route::get('/home', 'HomeController@index')->name('home');
// to get data for DataTable by Ajax
Route::get('/adminpanel/users/data', [
    'uses'          => 'UsersController@anyData',
    'as'            => 'adminpanel.users.data'
]);
Route::get('/adminpanel/buildings/data', [
    'uses'          => 'BuildingController@anyData',
    'as'            => 'adminpanel.buildings.data'
]);

Route::group(['middleware' => ['admin']], function(){
    Route::get('/adminpanel', [
        'uses'          => 'AdminController@index',
        'as'            => 'dashboard'
    ]);
    Route::resource('/adminpanel/buildings', 'BuildingController');
    // Site Settings
    Route::get('/adminpanel/site-settings', [
        'uses'          => 'SiteSettingController@index',
        'as'            => 'site.settings'
    ]);
    Route::post('/adminpanel/site-settings', [
        'uses'          => 'SiteSettingController@store',
        'as'            => 'site.settings'
    ]);
    // Users
    Route::resource('adminpanel/users', 'UsersController');
    Route::get('adminpanel/users/{id}/delete', 'UsersController@destroy');
});
Route::get('logout', 'AdminController@logout')->name('logout');