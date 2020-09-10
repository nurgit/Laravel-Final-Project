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
Route::post('/signup', ['uses'=>'Signup@validation']);
Route::middleware(['sess'])->group(function()
{
    Route::get('/admin', 'AdminController@index');
    Route::get('/viewuser', 'AdminController@view_users');




   // ********************************************tutor routes *****************************************************
   Route::get('/tutor', 'TutorController@index');//->middleware('sess');
   Route::get('/tutor/profile/{username}', 'TutorController@profile');
   Route::get('/tutor/contact', 'TutorController@contact')->name('tutor.contact');//Using name routing ***
   Route::get('/tutor/update/{username}', 'TutorController@updateView');
   Route::post('/tutor/update/{username}', 'TutorController@update');


   // ******************************************student Routes ******************************************************


    Route::get('/student', 'StudentController@index');

    Route::get('/student/profile','StudentController@profile');






});


//Route::get('/home', 'LoginController@validation');
