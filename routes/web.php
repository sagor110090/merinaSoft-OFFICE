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

    // Route::resource('admin/school', 'Admin\\SchoolController');
    Route::get('admin/settings', 'Admin\\RoleSettingsContoller@show');
    Route::post('admin/settings/{id}', 'Admin\\RoleSettingsContoller@update');

    Route::resource('admin/holiday', 'Admin\\HolidayController');
    Route::resource('admin/slider', 'Admin\\SliderController');
    Route::resource('admin/service', 'Admin\\ServiceController');
    Route::resource('admin/objective', 'Admin\\ObjectiveController');
    Route::resource('admin/fcq', 'Admin\\FCQController');
    Route::resource('admin/category', 'Admin\\CategoryController');
    Route::resource('admin/project', 'Admin\\ProjectController');
    Route::resource('admin/our_team', 'Admin\\OurTeamController');
    // Route::get('admin/theme', 'HomeController@themes');

    //------------------------------------------------------ Student management System-------------------------------------------------




});

    Route::get('/', 'FrontEndController@home');
    Route::get('/service-details/{slug}', 'FrontEndController@serviceDetails');


