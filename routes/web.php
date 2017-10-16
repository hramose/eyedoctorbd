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

Route::get('/','MainController@welcome')->name('welcome');

Route::get('profile/{username}', 'DoctorController@doctorDetail')->name('profile');

Route::get('alldoctors', 'DoctorController@alldoctors')->name('alldoctors');

Route::group(['prefix' => 'search'], function(){
	Route::post('/', 'SearchController@index')->name('search');
	Route::get('/{city}/{sub}', 'SearchController@search');
});

Route::get('contact','PageController@contact')->name('contactus');
Route::get('about','PageController@about')->name('aboutus');

Route::group(['middleware' => 'visitors'], function(){
	Route::get('/register', 'RegistrationController@register')->name('register');
	Route::post('/register', 'RegistrationController@createDoctor')->name('doRegister');

	Route::get('/login', 'LoginController@login')->name('login');
	Route::post('/login', 'LoginController@doLogin')->name('doLogin');

	Route::get('/forgot-password', 'ForgotPasswordController@forgotPassword')->name('forgot-password');
	Route::post('/forgot-password', 'ForgotPasswordController@postForgotPassword')->name('forgotpassword');

	Route::get('/reset/{email}/{resetCode}', 'ForgotPasswordController@resetPassword');
	Route::post('/reset/{email}/{resetCode}', 'ForgotPasswordController@postResetPassword');

});

Route::get('/activation/{email}/{activationCode}', 'ActivationController@activate');
Route::post('/logout', 'LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
	Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
	Route::get('/alldoctors', 'AdminController@alldoctors')->name('adminAllDoctors');
	Route::get('/alldoctors-tableview', 'AdminController@alldoctorsTableview')->name('amdinAlldoctorsTableview');
});

Route::group(['prefix' => 'doctor', 'middleware' => 'doctor'], function(){
	Route::get('/dashboard', 'DoctorController@dashboard')->name('doctorDashboard');
	Route::get('/profile', 'DoctorController@profile')->name('doctorProfile');
	Route::post('/profile/update', 'DoctorController@profileUpdate')->name('profileUpdate');
	Route::post('/status', 'DoctorController@status')->name('status');
	// Chamber CURD
	Route::get('/chambers', 'ChambersController@chambers')->name('chambers');
	Route::post('/chambers/api', 'ChambersController@api')->name('capi');
	Route::post('/chamber/add', 'ChambersController@addChamber')->name('addChamber');
	Route::delete('/chambers/delete', 'ChambersController@deleteChamber')->name('delete.chamber');
});