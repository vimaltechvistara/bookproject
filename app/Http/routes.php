<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});
Route::post('dologin', array('as'=>'dologin','uses'=>'UserController@dologin'));

Route::get('dashboard','UserController@Dashboard');

Route::get('createbooks','BooksController@CreateBooks');
Route::post('savebook', array('as'=>'savebook','uses'=>'BooksController@savebook'));

Route::get('booklists','BooksController@GetListofBooks');

Route::get('createclass','ClassController@Createclass');
Route::post('saveclass', array('as'=>'saveclass','uses'=>'ClassController@saveclass'));

Route::get('classlists','ClassController@GetListofclasses');

Route::get('{id}/editclass','ClassController@GetListforEditclass');
Route::post('{id}/updateclass', array('as'=>'updateclass','uses'=>'ClassController@updateclass'));


Route::get('subjectlists','SubjectController@GetListofsubjects');
Route::get('createsubject','SubjectController@Createsubject');
Route::get('{id}/editsubject','SubjectController@GetListforEditsubject');
Route::post('{id}/updatesubject', array('as'=>'updatesubject','uses'=>'SubjectController@updatesubject'));

Route::post('savesubject', array('as'=>'savesubject','uses'=>'SubjectController@savesubject'));
Route::get('createinstitute','InstituteController@CreateInstitute');
Route::post('saveinstitution', array('as'=>'saveinstitution','uses'=>'InstituteController@saveinstitution'));

Route::get('institutelists','InstituteController@GetListofInstitutes');
Route::get('{id}/editinstitution','InstituteController@GetListforeditinstitution');
Route::post('{id}/updateinstitution', array('as'=>'updateinstitution','uses'=>'InstituteController@updateinstitution'));
Route::get('{id}/viewinstitution','InstituteController@GetViewforinstitution');

Route::get('createstudent','StudentController@createstudent');
Route::post('savestudent', array('as'=>'savestudent','uses'=>'StudentController@savestudent'));
Route::get('studentlists','StudentController@GetListofstudents');
Route::get('{id}/viewstudent','StudentController@GetViewforstudent');
Route::get('{id}/editstudent','StudentController@GetListforeditstudent');
Route::post('{id}/updatestudent', array('as'=>'updatestudent','uses'=>'StudentController@updatestudent'));



Route::get('createpublisher','PublisherController@CreatePublisher');
Route::post('savepublisher', array('as'=>'savepublisher','uses'=>'PublisherController@savepublisher'));
Route::get('publisherlists','PublisherController@GetListofPublisher');
Route::get('{id}/viewpublisher','PublisherController@ShowPublisher');
Route::get('{id}/editpublisher','PublisherController@getPublisher');
Route::post('{id}/updatepublisher', array('as'=>'updatepublisher','uses'=>'PublisherController@getupdatePublisher'));

Route::get('assigninstitutebooks','InstituteController@AssignInstituteBook');
Route::get('assignedinstitutebooklists','InstituteController@GetListofAssignedInstituteBooklists');
Route::get('notificationlist','NotificationController@GetListofnotifications');
Route::get('createnotification','NotificationController@Createnotifications');
Route::get('updateprofile','SettingsController@UpdateProfile');
Route::get('updatepassword','SettingsController@UpdatePassword');
Route::get('updatewebsite','SettingsController@UpdateWebsite');
Route::get('updatesubscription','SettingsController@UpdateSubscription');





Route::get('logout', function()
{
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
});