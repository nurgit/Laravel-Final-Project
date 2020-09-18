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
    Route::get('/adminureg', 'AdminController@adminureg');
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
   Route::get('/tutor/contact/{id}', 'TutorController@contact');//->name('tutor.contact');//Using name routing ***
   Route::post('/tutor/contact/{id}', 'TutorController@contactInsert');
   Route::get('/tutor/update/{id}', 'TutorController@updateView');
   Route::post('/tutor/update/{id}', 'TutorController@update');
   Route::get('/tutor/requestPaidTutor/{id}', 'TutorController@requestPaidTutorView');
   Route::post('/tutor/requestPaidTutor/{id}', 'TutorController@requestPaidTutor');
    Route::get('/tutor/student', 'TutorController@studentView');
    Route::get('/tutor/readBlog', 'TutorController@readBlog');










   // ******************************************student Routes ******************************************************


    Route::get('/student', 'StudentController@index');
    Route::get('/student/tutor', 'StudentController@view_tutor');
    Route::get('/student/contact', 'StudentController@contact');
    Route::post('/student/contact', 'StudentController@message');
    Route::get('/student/profile','StudentController@profile');
    Route::get('/student/update/{id}', 'StudentController@updateView');
   Route::post('/student/update/{id}', 'StudentController@update');






});


//Route::get('/home', 'LoginController@validation');
