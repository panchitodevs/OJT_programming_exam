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
Route::get('/', function(){
            return redirect('/courses');
});
Route::get('/courses', 'CourseController@index')->name('courses.index');
Route::get('/courses/create', 'CourseController@create')->name('courses.create');
Route::post('/courses', 'CourseController@store')->name('courses.store');
Route::get('/courses/{id}/edit', 'CourseController@edit')->name('courses.edit');
Route::put('/courses/{id}', 'CourseController@update')->name('courses.update');
Route::delete('/courses/{id}', 'CourseController@destroy')->name('courses.destroy');

Route::get('/courses/filter/duration', 'CourseController@courseDuration')->name('courses.duration');

