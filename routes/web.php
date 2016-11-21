<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('about', function()
{
    return View::make('about');
});

Route::get('about', function()
{
    return View::make('about');
});

Route::group(array('prefix' => 'admin'), function()
{
    // main page for the admin section (app/views/admin/dashboard.blade.php)
    Route::get('/', function()
    {
        return View::make('admin.dashboard');
    });

    // subpage for the posts found at /admin/posts (app/views/admin/posts.blade.php)
    Route::get('/engenhariainformatica', function()
    {
        return View::make('admin.engenhariainformatica');
    });

    // subpage to create a post found at /admin/posts/create (app/views/admin/posts-create.blade.php)
    Route::get('posts/create', function()
    {
        return View::make('admin.posts-create');
    });
});


Route::group(array('prefix' => 'licenciatura'), function()
{
    // main page for the admin section (app/views/admin/dashboard.blade.php)
    Route::get('/', function()
    {
        return View::make('licenciatura.index');
    });

});

//Contact Page
Route::get('contact', 'ContactController@getContact');

//Form request:: POST action will trigger to controller
Route::post('contact_request','ContactController@getContactUsForm');