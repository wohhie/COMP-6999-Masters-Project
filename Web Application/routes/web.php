<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/dashboard', 'DashboardController@index')->name('Dashboard');



Route::resource('courses', 'CourseController');
Route::resource('students', 'StudentController');
Route::resource('exams', 'ExamController');
Route::resource('users', 'UserController');
Route::resource('questions', 'QuestionController');
Route::get('courses/{id}/setting/{examid}', 'CourseController@setting')->name('courses.setting');


Route::resource('blocksite', 'BlocksiteController');
Route::resource('keyword', 'KeywordController');

