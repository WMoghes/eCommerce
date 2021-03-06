<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'BuildingController@welcomeInfo')->name('welcome');

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
    Route::get('adminpanel/buildings/{id}/delete', 'BuildingController@destroy');
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

// frontend Building page
Route::get('buildings', 'BuildingController@getActiveBuildings')->name('frontend.buildings');
Route::get('buildings/type-building/{id}', 'BuildingController@getBuildingType')->name('frontend.building-type.buildings');
Route::get('buildings/type-rent/{id}', 'BuildingController@getTypeRent')->name('frontend.type-rent.buildings');
Route::any('buildings/search', 'BuildingController@search')->name('frontend.buildings.search');
Route::get('buildings/show/{id}', 'BuildingController@show')->name('frontend.buildings.show');