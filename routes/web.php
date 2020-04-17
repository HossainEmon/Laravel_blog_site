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



Route::get('/','AppController@welcome');

Route::get('/home','AppController@index')->name('home');
Route::get('/about','AppController@about')->name('about');
Route::get('/contact','AppController@contact')->name('contact');



//category

Route::get('/addcategory','CategoryController@addcategory')->name('add.category');
Route::get('/allcategory','AllcategoryController@allcategory')->name('all.category');
Route::post('/storecategory','CategoryController@storecategory')->name('store.category');

Route::get('/view.category/{id}','ViewCategoryController@viewcategory');
Route::get('/delete.category/{id}','DeleteCategoryController@deletecategory');
Route::get('/edit.category/{id}','EditCategoryController@editcategory');

Route::post('/update.category/{id}','UpdateCategoryController@updatecategory');


//post
Route::get('/writepost','PostController@writepost')->name('writepost');
Route::post('/store.post','PostController@storepost')->name('store.post');
Route::get('/all.post','AllpostController@AllPost')->name('all.post');
Route::get('/view.post/{id}','AllpostController@ViewPost');
Route::get('/edit.post/{id}','EditpostController@EditPost');
Route::post('/update.post/{id}','UpdatepostController@UpdatePost');
Route::get('/delete.post/{id}','DeletepostController@DeletePost');

//student

Route::get('/student','StudentController@Student')->name('student');
Route::post('/store.student','StudentController@string')->name('store.student');
Route::get('all.student','StudentController@index')->name('all.student');
Route::get('view.student/{id}','StudentController@show');
Route::get('delete.student/{id}','StudentController@destroy');
Route::get('edit.student/{id}','StudentController@edit');
Route::post('update/student/{id}','StudentController@update');


