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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;

Route::get('/secure/config/migrate-refresh', ['uses'=> 'ConfigController@migrateRefresh']);
Route::get('/secure/config/migrate', ['uses'=> 'ConfigController@migrate']);
Route::get('/secure/config/db-seed', ['uses'=> 'ConfigController@dbSeed']);
Route::get('/secure/config/clear-autoload', ['uses'=> 'ConfigController@clearAutoLoad']);
Route::get('/secure/config/config-cache', ['uses'=> 'ConfigController@configCache']);
Route::get('/secure/config/key-generate', ['uses'=> 'ConfigController@keyGenerate']);



Auth::routes();
Route::get('/', ['as' => 'front' , 'uses' => 'UserSideController@index']);
Route::get('/faqs', ['as' => 'front.faqs', 'uses' => 'UserSideController@faqs']);
Route::get('/about', ['as' => 'front.about.us', 'uses' => 'UserSideController@aboutUs']);
Route::get('/contact', ['as' => 'front.contact', 'uses' => 'UserSideController@contact']);
Route::get('/courses/lessons/{id}', ['as' => 'single.course.lessons' , 'uses' => 'UserSideController@courseLessons']);
Route::get('/add/homework/lesson/{id}', ['as' => 'homework.add' , 'uses' => 'UserSideController@homework']);
Route::post('/store/homework/lesson/{id}', ['as' => 'homework.store' , 'uses' => 'UserSideController@homeworkAdd']);
Route::post('/pay/finish', ['as' => 'pay.finish', 'uses' => 'PaymentController@finish']);
Route::get('/pay/finish', ['as' => 'pay.finish', 'uses' => 'PaymentController@finish']);

Route::get('/courses/{id}', ['as' => 'single.course' , 'uses' => 'UserSideController@course']);
Route::get('/make/order/{id}', ['as' => 'make.order', 'uses' => 'UserSideController@makeOrder'])->where('id', '[0-9]+');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/my/courses', ['as' => 'my.courses' , 'uses' => 'UserSideController@myCourses']);
    Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('/survey', ['as' => 'survey', 'uses' => 'SurveyController@survey']);
    Route::post('/survey/save', ['as' => 'survey.store', 'uses' => 'SurveyController@store']);
    Route::get('/pay/{id}', ['as' => 'pay.course', 'uses' => 'PaymentController@index'])->where('id', '[0-9]+');

    Route::get('/client/courses', ['as' => 'client.course.index', 'uses' => 'ClientController@courses']);
    Route::get('/client/courses/{id}', ['as' => 'client.course.details', 'uses' => 'ClientController@details'])->where('id', '[0-9]+');

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

        Route::get('/users', ['as' => 'user.index', 'uses' => 'UserController@index']);
        Route::get('/users/create', ['as' => 'user.create', 'uses' => 'UserController@create']);
        Route::post('/users/store', ['as' => 'user.store', 'uses' => 'UserController@store']);
        Route::get('/users/edit/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit'])->where('id', '[0-9]+');
        Route::post('/users/update/{id}', ['as' => 'user.update', 'uses' => 'UserController@update'])->where('id', '[0-9]+');
        Route::post('/users/updatePassword/{id}', ['as' => 'user.updatePassword', 'uses' => 'UserController@updatePassword'])->where('id', '[0-9]+');
        Route::post('/users/delete/{id}', ['as' => 'user.delete', 'uses' => 'UserController@delete'])->where('id', '[0-9]+');

        Route::get('/roles', ['as' => 'role.index', 'uses' => 'RoleController@index']);
        Route::get('/roles/edit/{id}', ['as' => 'role.edit', 'uses' => 'RoleController@edit'])->where('id', '[0-9]+');
        Route::post('/roles/update/{id}', ['as' => 'role.update', 'uses' => 'RoleController@update'])->where('id', '[0-9]+');


        Route::get('/courses/create', ['as' => 'course.create', 'uses' => 'CourseController@create']);
        Route::post('/courses/store', ['as' => 'course.store', 'uses' => 'CourseController@store']);
        Route::get('/courses', ['as' => 'course.index', 'uses' => 'CourseController@index']);
        Route::get('/courses/{id}', ['as' => 'course.details', 'uses' => 'CourseController@details'])->where('id', '[0-9]+');
        Route::get('/courses/edit/{id}', ['as' => 'course.edit', 'uses' => 'CourseController@edit'])->where('id', '[0-9]+');
        Route::post('/courses/update/{id}', ['as' => 'course.update', 'uses' => 'CourseController@update'])->where('id', '[0-9]+');
        Route::post('/courses/toggle/visible/{id}', ['as' => 'course.toggle.visible', 'uses' => 'CourseController@toggleVisibility'])->where('id', '[0-9]+');
        Route::post('/courses/update/image/{id}', ['as' => 'course.update.image', 'uses' => 'CourseController@updateImage'])->where('id', '[0-9]+');
        Route::post('/courses/delete/{id}', ['as' => 'course.delete', 'uses' => 'CourseController@delete'])->where('id', '[0-9]+');

        Route::get('/lessons/create/{id}', ['as' => 'lesson.create', 'uses' => 'LessonController@create'])->where('id', '[0-9]+');
        Route::post('/lessons/store', ['as' => 'lesson.store', 'uses' => 'LessonController@store']);
        Route::get('/lessons/edit/{id}', ['as' => 'lesson.edit', 'uses' => 'LessonController@edit'])->where('id', '[0-9]+');
        Route::post('/lessons/update/{id}', ['as' => 'lesson.update', 'uses' => 'LessonController@update'])->where('id', '[0-9]+');
        Route::post('/lessons/delete/{id}', ['as' => 'lesson.delete', 'uses' => 'LessonController@delete'])->where('id', '[0-9]+');

        Route::get('/orders/create', ['as' => 'order.create', 'uses' => 'OrderController@create']);
        Route::post('/orders/store', ['as' => 'order.store', 'uses' => 'OrderController@store']);
        Route::get('/orders', ['as' => 'order.index', 'uses' => 'OrderController@index']);
        Route::get('/orders/edit/{id}', ['as' => 'order.edit', 'uses' => 'OrderController@edit'])->where('id', '[0-9]+');
        Route::get('/orders/{id}', ['as' => 'order.details', 'uses' => 'OrderController@details'])->where('id', '[0-9]+');
        Route::post('/orders/update/{id}', ['as' => 'order.update', 'uses' => 'OrderController@update'])->where('id', '[0-9]+');
        Route::post('/orders/toggle/status/{id}', ['as' => 'order.toggle.status', 'uses' => 'OrderController@toggleStatus'])->where('id', '[0-9]+');
        Route::post('/orders/delete/{id}', ['as' => 'order.delete', 'uses' => 'OrderController@delete'])->where('id', '[0-9]+');

        Route::get('/streams/create', ['as' => 'stream.create', 'uses' => 'StreamController@create']);
        Route::post('/streams/store', ['as' => 'stream.store', 'uses' => 'StreamController@store']);
        Route::get('/streams', ['as' => 'stream.index', 'uses' => 'StreamController@index']);
        Route::get('/streams/edit/{id}', ['as' => 'stream.edit', 'uses' => 'StreamController@edit'])->where('id', '[0-9]+');
        Route::get('/streams/{id}', ['as' => 'stream.details', 'uses' => 'StreamController@details'])->where('id', '[0-9]+');
        Route::post('/streams/update/{id}', ['as' => 'stream.update', 'uses' => 'StreamController@update'])->where('id', '[0-9]+');
        Route::post('/streams/toggle/status/{id}', ['as' => 'stream.toggle.status', 'uses' => 'StreamController@toggleStatus'])->where('id', '[0-9]+');
        Route::post('/streams/delete/{id}', ['as' => 'stream.delete', 'uses' => 'StreamController@delete'])->where('id', '[0-9]+');
        Route::post('/streams/started/{id}', ['as' => 'stream.started', 'uses' => 'StreamController@started'])->where('id', '[0-9]+');

        Route::get('/faq/create', ['as' => 'faq.create', 'uses' => 'FAQController@create']);
        Route::get('/faqs', ['as' => 'faq.index', 'uses' => 'FAQController@index']);
        Route::post('/faq/store', ['as' => 'faq.store', 'uses' => 'FAQController@store']);
        Route::post('/faq/delete/{id}', ['as' => 'faq.delete', 'uses' => 'FAQController@delete'])->where('id', '[0-9]+');
        Route::get('/faq/edit/{id}', ['as' => 'faq.edit', 'uses' => 'FAQController@edit']);
        Route::post('/faq/update/{id}', ['as' => 'faq.update', 'uses' => 'FAQController@update']);

        Route::get('/homeworks', ['as' => 'homeworks.index', 'uses' => 'HomeWorksController@index']);
        Route::get('/homeworks/stream/{id}', ['as' => 'homeworks.stream', 'uses' => 'HomeWorksController@homeworkByOrder']);
        Route::get('/homeworks/edit/{id}', ['as' => 'homeworks.edit', 'uses' => 'HomeWorksController@edit']);
        Route::post('/homeworks/update/{id}', ['as' => 'homeworks.update', 'uses' => 'HomeWorksController@update']);



    });
    Route::get('/user/edit', ['as' => 'self.user.edit', 'uses' => 'UserController@selfEdit']);
    Route::post('/user/update', ['as' => 'self.user.update', 'uses' => 'UserController@selfUpdate']);
    Route::post('/user/updatePassword', ['as' => 'self.user.updatePassword', 'uses' => 'UserController@selfUpdatePassword']);


});

