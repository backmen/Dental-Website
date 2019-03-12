<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['as'=>'admin.' , 'prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/site-config', 'SiteConfigController@index')->name('site.config');
    Route::get('/site-config/create', 'SiteConfigController@create')->name('site.config.create');
});
