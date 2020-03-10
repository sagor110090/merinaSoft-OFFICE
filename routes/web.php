<?php

Auth::routes(['register' => false]);

Route::get('/crudIndex', 'HomeController@crudIndex');
Route::get('/crud2index', 'HomeController@crud2index');
Route::post('/jsonSave', 'HomeController@jsonSave');
Route::post('/crudMaker', 'HomeController@crudMaker');
//------------------------------------------------------------

Route::group(['middleware' => ['auth']], function () {
    // Route::get('/', 'HomeController@index');
    Route::get('/sidebar', 'HomeController@sidebar');
    Route::get('/sidebar/show', 'HomeController@sidebarShow');
    Route::get('/dashboard', 'HomeController@index');

    Route::resource('admin/school', 'Admin\\SchoolController');
    Route::get('admin/settings', 'Admin\\RoleSettingsContoller@show');
    Route::post('admin/settings/{id}', 'Admin\\RoleSettingsContoller@update');

    Route::resource('admin/holiday', 'Admin\\HolidayController');
    // Route::get('admin/theme', 'HomeController@themes');

    //------------------------------------------------------ Student management System-------------------------------------------------




});

    Route::get('/', 'HomeController@home');


