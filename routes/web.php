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

/*
/Route For Everyone
*/


Route::get('/','MainController@welcome')->name('welcome');
Route::get('alldoctors', 'DoctorController@alldoctors')->name('alldoctors');
Route::get('profile/{slug}', 'DoctorController@doctorDetail')->name('profile');
Route::get('about','PageController@about')->name('aboutus');
Route::get('contact','PageController@contact')->name('contactus');
Route::post('contact','ContactController@addMessage')->name('post.contact');

/*
/Search Route
*/
Route::group(['prefix' => 'search'], function(){
	Route::post('/', 'SearchController@index')->name('search');
	Route::get('/{city}/{sub}', 'SearchController@search');
});

/*
/Blog Route
*/
Route::group(['prefix' => 'blog'], function(){
	Route::get('/archives', 'BlogController@index')->name('blog');
	Route::get('/archives/{post}', 'BlogController@post')->name('blog.post');
	Route::get('/tag/{tags}', 'BlogController@tagPosts')->name('tag.post');
	Route::get('/category/{categories}', 'BlogController@categoryPosts')->name('category.post');
});

/*
/ Auth Route  Only For Visitors//
*/
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

/*
/Route For Only Admin
*/
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
	Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
	Route::get('/alldoctors', 'AdminController@alldoctors')->name('adminAllDoctors');
	Route::get('/alldoctors-tableview', 'AdminController@alldoctorsTableview')->name('amdinAlldoctorsTableview');
	Route::get('/contact', 'ContactController@viewMessage')->name('viewContactMessage');

	/*
	/Blog system route
	*/
	Route::group(['prefix' => 'blog','namespace' => 'Blog'], function () {
		//Categories Routes
		Route::resource('/category', 'CategoryController');		
		//Tag Routes
		Route::resource('/tag', 'TagController');
		//Post Routes
		Route::resource('/post', 'PostController');		
	});

	Route::resource('/city', 'CityController');
	Route::resource('/sub-area', 'Sub_areaController');

});
/*
/ Route For Only Doctor
*/
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