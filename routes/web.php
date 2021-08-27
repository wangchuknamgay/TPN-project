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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//announcement
Route::get('announcements','AnnouncementController@display')->name('announcements');
Route::post('/createannouncement','AnnouncementController@store')->name('createannouncement');
Route::get('/editannouncement/{id}','AnnouncementController@edit')->name('editsannouncement');
Route::put('/updateannouncement/{id}','AnnouncementController@update')->name('updateannouncement');
Route::get('/deleteannouncement/{id}','AnnouncementController@delete')->name('deleteannouncement');


//announcement
Route::get('boardMember','BoardController@index')->name('boardMember');
Route::post('/saveBoardMember','BoardController@saveBoardMember')->name('saveBoardMember');
Route::get('/deleteDetails/{id}','BoardController@deleteDetails')->name('deleteDetails');
