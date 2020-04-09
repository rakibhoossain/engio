<?php

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/coronavirus', 'FrontendController@coronavirus')->name('coronavirus');
Route::get('/coronavirus/{corona}', 'FrontendController@coronavirusSingle')->name('coronavirus.single');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/contact', 'FrontendController@contact')->name('contact');


// Route::redirect('/', '/login');

// Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductsController');

    Route::resource('corona', 'CoronaController');
    Route::delete('corona/destroy', 'CoronaController@massDestroy')->name('corona.massDestroy');

});
