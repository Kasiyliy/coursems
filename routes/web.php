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

Auth::routes();
Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::get('/client/courses', ['as' => 'client.course.index', 'uses' => 'ClientController@courses']);
    Route::get('/client/courses/{id}', ['as' => 'client.course.details', 'uses' => 'ClientController@details'])->where('id', '[0-9]+');

    Route::group(['middleware' => 'admin'], function () {

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

        Route::get('/orders/create', ['as' => 'order.create', 'uses' => 'orderController@create']);
        Route::post('/orders/store', ['as' => 'order.store', 'uses' => 'orderController@store']);
        Route::get('/orders', ['as' => 'order.index', 'uses' => 'orderController@index']);
        Route::get('/orders/edit/{id}', ['as' => 'order.edit', 'uses' => 'orderController@edit'])->where('id', '[0-9]+');
        Route::get('/orders/{id}', ['as' => 'order.details', 'uses' => 'orderController@details'])->where('id', '[0-9]+');
        Route::post('/orders/update/{id}', ['as' => 'order.update', 'uses' => 'orderController@update'])->where('id', '[0-9]+');
        Route::post('/orders/toggle/status/{id}', ['as' => 'order.toggle.status', 'uses' => 'orderController@toggleStatus'])->where('id', '[0-9]+');
        Route::post('/orders/delete/{id}', ['as' => 'order.delete', 'uses' => 'orderController@delete'])->where('id', '[0-9]+');

        Route::get('/streams/create', ['as' => 'stream.create', 'uses' => 'streamController@create']);
        Route::post('/streams/store', ['as' => 'stream.store', 'uses' => 'streamController@store']);
        Route::get('/streams', ['as' => 'stream.index', 'uses' => 'streamController@index']);
        Route::get('/streams/edit/{id}', ['as' => 'stream.edit', 'uses' => 'streamController@edit'])->where('id', '[0-9]+');
        Route::get('/streams/{id}', ['as' => 'stream.details', 'uses' => 'streamController@details'])->where('id', '[0-9]+');
        Route::post('/streams/update/{id}', ['as' => 'stream.update', 'uses' => 'streamController@update'])->where('id', '[0-9]+');
        Route::post('/streams/toggle/status/{id}', ['as' => 'stream.toggle.status', 'uses' => 'streamController@toggleStatus'])->where('id', '[0-9]+');
        Route::post('/streams/delete/{id}', ['as' => 'stream.delete', 'uses' => 'streamController@delete'])->where('id', '[0-9]+');
    });

    Route::get('/user/edit', ['as' => 'self.user.edit', 'uses' => 'UserController@selfEdit']);
    Route::post('/user/update', ['as' => 'self.user.update', 'uses' => 'UserController@selfUpdate']);
    Route::post('/user/updatePassword', ['as' => 'self.user.updatePassword', 'uses' => 'UserController@selfUpdatePassword']);


});
