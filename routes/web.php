<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'LoginController@index');
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/logout', ['uses'=>'logoutController@index']);

Route::get('/signup', 'SignupController@index');
Route::post('/signup', ['uses'=>'SignupController@store']);
Route::middleware(['sess'])->group(function()
{
    Route::get('/admin', 'AdminController@index');
    Route::get('/dotnet', 'AdminController@dotnet');
    Route::get('/node','AdminController@node');
    Route::get('/adminureg', 'AdminController@adminureg');
    Route::post('/adminureg','AdminController@storeuser');
    Route::get('/viewuser', 'AdminController@view_users');
    Route::get('Admin/adminstudent', 'AdminController@adminstudent');
    Route::get('Admin/admintutor', 'AdminController@admintutor');
    Route::get('Admin/edituser/{id}', 'AdminController@edituser');
    Route::post('Admin/edituser/{id}', 'AdminController@updateduser');
    Route::get('Admin/deleteuser/{id}', 'AdminController@deleteuser');
    Route::post('Admin/deleteuser/{id}', 'AdminController@removeuser');





   // ********************************************tutor routes *****************************************************
   Route::get('/tutor', 'TutorController@index');//->middleware('sess');
   Route::get('/tutor/profile/{username}', 'TutorController@profile');
   Route::get('/tutor/contact', 'TutorController@contact')->name('tutor.contact');//Using name routing ***
   Route::get('/tutor/update/{id}', 'TutorController@updateView');
   Route::post('/tutor/update/{id}', 'TutorController@update');


   // ******************************************student Routes ******************************************************


    Route::get('/student', 'StudentController@index');

    Route::get('/student/profile','StudentController@profile');






});


//Route::get('/home', 'LoginController@validation');
