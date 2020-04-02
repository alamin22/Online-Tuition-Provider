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
//*******************users section***********************

Route::get('/tuitionoffer','users\usersController@tuitionofferHome')->name('users.tuitionofferHome');

//tuition provider section

// Route::get('/tuitionoffer/provider','users\providerController@getProviderPage')->name('users.getProviderPage');

// Route::get('/tuitionoffer/provider/post','users\providerController@tuitionProviderPost')->name('users.tuitionProviderPost');
Route::post('/tuitionoffer/provider/postSave','users\providerController@tuitionProviderPostSave')->name('users.tuitionProviderPostSave');
Route::get('/tuitionoffer/viewTuitiondetail','users\providerController@viewTuitiondetail')->name('users.viewTuitiondetail');
Route::get('/tuitionoffer/tuitiondivition','users\providerController@tuitiondivition')->name('users.tuitiondivition');

//tutors section

Route::get('/tuitionoffer/tutor','users\tutorsController@getTutorPage')->name('users.getTutorPage');
// Route::get('/tuitionoffer/tutor/biodataForm','users\tutorsController@tutorBiodataForm')->name('users.tutorBiodataForm');
Route::get('/tuitionoffer/tutorsdivition','users\tutorsController@tutorsdivition')->name('users.tutorsdivition');
Route::get('/tuitionoffer/permanent/divition','users\tutorsController@permanentdivition')->name('users.permanentdivition');
Route::get('/tuitionoffer/View/Biodata','users\tutorsController@getBiodata')->name('users.getBiodata');
Route::post('/tuitionoffer/tutor/AddBiodata','users\tutorsController@tutorBiodata')->name('users.tutorBiodata');

//tutors login
Route::post('/tuitionoffer/registration','users\registrationController@registration')->name('users.registration');
Route::post('/tuitionoffer/userProfile','users\registrationController@login')->name('users.login');


Route::get('/tuitionoffer/getTutorProvider','users\tutorProviderController@getTutorProvider')->name('users.getTutorProvider');
Route::get('/tuitionoffer/logout','users\registrationController@logout')->name('users.logout');

//About Tuition section
Route::get('/tuitionoffer/About','users\usersController@tuitionofferAbout')->name('users.tuitionofferAbout');
Route::get('/tuitionoffer/Help','users\usersController@tuitionofferHelp')->name('users.tuitionofferHelp');

//user Comments
Route::get('/Users/Comments','users\userCommentController@userComments')->name('users.userComments');
Route::post('/Users/Comments/Save','users\userCommentController@userCommentSave')->name('users.userCommentSave');

//middleware section

//route::group(['middleware'=>['validUsers']],function(){
//tutor add section lock
	Route::get('/tuitionoffer/tutor/biodataForm','users\tutorsController@tutorBiodataForm')->name('users.tutorBiodataForm');
//tuition provider section lock
	Route::get('/tuitionoffer/provider/post','users\providerController@tuitionProviderPost')->name('users.tuitionProviderPost');
	Route::get('/tuitionoffer/provider','users\providerController@getProviderPage')->name('users.getProviderPage');

	//user profile section lock
	

//});