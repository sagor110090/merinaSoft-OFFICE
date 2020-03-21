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
    Route::resource('admin/category', 'Admin\\CategoryController');
    Route::resource('admin/project', 'Admin\\ProjectController');
    Route::resource('admin/our_team', 'Admin\\OurTeamController');
    Route::resource('admin/message', 'Admin\\MessageController');
    Route::resource('admin/contact', 'Admin\\ContactController');
    Route::resource('admin/about', 'Admin\\AboutController');
    Route::resource('admin/client', 'Admin\\ClientController');
    Route::resource('admin/newsletter', 'Admin\\NewsletterController');
    Route::resource('admin/blog-category', 'Admin\\BlogCategoryController');
    Route::resource('admin/blog', 'Admin\\BlogController');
    // Route::get('admin/theme', 'HomeController@themes');

    //------------------------------------------------------ Student management System-------------------------------------------------




});

    Route::get('/', 'FrontEndController@home');
    Route::get('/service-details/{slug}', 'FrontEndController@serviceDetails');
    Route::get('/project-details/{slug}', 'FrontEndController@projectDetails');
    Route::get('/projects', 'FrontEndController@projects');
    Route::get('/services', 'FrontEndController@services');
    Route::get('/team', 'FrontEndController@team');
    Route::get('/clients', 'FrontEndController@clients');
    Route::get('/about', 'FrontEndController@about');
    Route::get('/blog', 'FrontEndController@blog');
    Route::get('/blog/{slug}', 'FrontEndController@slugBlog');
    Route::get('/blog_single/{slug}', 'FrontEndController@blog_single');
    Route::get('/contacts', 'FrontEndController@contacts');
    Route::post('/message', 'FrontEndController@addMessage');
    Route::post('/newsletter', 'FrontEndController@addEmail');

    

Route::get('/live', function () {
    return view('frontEnd.live');
    
});


