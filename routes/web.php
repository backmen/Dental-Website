<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['as'=>'admin.' , 'prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/site-config', 'SiteConfigController@index')->name('site.config');
    Route::get('/site-config/create', 'SiteConfigController@create')->name('site.config.create');
    Route::post('/site-config/store', 'SiteConfigController@store')->name('site.config.store');
    Route::post('/site-config/update', 'SiteConfigController@update')->name('site.config.update');

    Route::resource('/slider','SliderController');
});
