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
    Route::get('/dotnetmember', 'AdminController@dotnetmember');

    Route::get('/guzz', 'AdminController@getRequest');
    Route::get('/node','AdminController@node');
    Route::get('/adminureg', 'AdminController@adminureg');
    Route::post('/adminureg','AdminController@storeuser');
    Route::post('/adminureg','AdminController@storeuser');
    Route::get('/admintutorres','AdminController@tutorres');
    Route::get('/payment','AdminController@payment');
    Route::get('/addpayment','AdminController@addpayment');
     Route::post('/addpayment','AdminController@storepayment');
     Route::get('/view_tutorpayment','AdminController@view_tutorpayment');
     Route::get('/view_studentpayment','AdminController@view_studentpayment');
     Route::get('/tutorpdf','AdminController@tutorpdf');
     Route::get('/studentpdf','AdminController@studentpdf');
     Route::get('/monthlyincome','AdminController@monthlyincome');




    Route::get('/viewuser', 'AdminController@view_users');
    Route::get('/viewstudent', 'AdminController@view_student');

    Route::get('Admin/adminstudent', 'AdminController@adminstudent');
    Route::get('Admin/admintutor', 'AdminController@admintutor');

    Route::get('Admin/edituser/{id}', 'AdminController@edituser');
    Route::post('Admin/edituser/{id}', 'AdminController@updateduser');

    Route::get('Admin/editstudent/{id}', 'AdminController@editstudent');
    Route::post('Admin/editstudent/{id}', 'AdminController@updatestudent');

     Route::get('Admin/edittutor/{id}', 'AdminController@edittutor');
    Route::post('Admin/edittutor/{id}', 'AdminController@updatetutor');

    Route::get('Admin/deleteuser/{id}', 'AdminController@deleteuser');
    Route::post('Admin/deleteuser/{id}', 'AdminController@removeuser');

     Route::get('Admin/deletestudent/{id}', 'AdminController@deletestudent');
    Route::post('Admin/deletestudent/{id}', 'AdminController@removestudent');

     Route::get('Admin/deletetutor/{id}', 'AdminController@deletetutor');
    Route::post('Admin/deletetutor/{id}', 'AdminController@removetutor');


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

    Route::get('/tutor/writeBlog', 'TutorController@writeBlogView');
    Route::post('/tutor/writeBlog', 'TutorController@writeBlog');

    Route::get('/tutor/uploadTutotial', 'TutorController@uploadTutotialView');
    Route::post('/tutor/uploadTutotial', 'TutorController@uploadTutotial');
    Route::get('/guzz', 'TutorController@allTutorial');//using Api
    Route::get('/guzz/package', 'TutorController@packageList');//using Api

    Route::get('/tutor/balance/{id}', 'TutorController@balance');

    Route::get('/tutor/readBlog', 'TutorController@readBlog');
    Route::get('/tutor/readBlog/pdf', 'TutorController@pdf');

    Route::get('/tutor/balance/pdf', 'TutorController@balancepdf');







   // ******************************************student Routes ******************************************************


   Route::get('/student', 'StudentController@index');
   Route::get('/student/tutor', 'StudentController@view_tutor');
   Route::get('/student/contact', 'StudentController@contact');
   Route::post('/student/contact', 'StudentController@message');
   Route::get('/student/profile','StudentController@profile');
   Route::get('/student/update/{id}', 'StudentController@updateView');
  Route::post('/student/update/{id}', 'StudentController@update');
  Route::get('/student/readBlog', 'StudentController@readBlog');
   Route::get('/student/ajax/pdf', 'StudentController@pdf');
   Route::get('/student/writeBlog', 'StudentController@writeBlog');
   Route::post('/student/writeBlog', 'StudentController@postBlog');
   Route::get('/student/tutorials', 'StudentController@tutorials');
   Route::get('/student/payment/{id}', 'StudentController@payment');
   Route::post('/student/payment/{id}', 'StudentController@postpayment');
   // Route::get('/student/ajax', 'StudentController@testblog');
   Route::post('/loadmore/load_data', 'StudentController@load_data')->name('loadmore.load_data');
   Route::get('student/live_search', 'StudentController@search');
Route::get('/live_search/action', 'StudentController@action')->name('live_search.action');

//    Route::get('/student/update/{id}', 'StudentController@update');






});


//Route::get('/home', 'LoginController@validation');
