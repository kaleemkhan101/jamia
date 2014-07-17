<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('upload', function()
// {
// 	return View::make('upload_form');
// });

// Route::post('myform', function()
//  {
//  $file = Input::file('book');
// $file_name = $file->getClientOriginalName();
// $file_size = round($file->getSize() / 1024);
// $file_ex = $file->getClientOriginalExtension();

// $file_path = storage_path().'/uploads';

// if (!in_array($file_ex, array('jpg', 'gif', 'png'))) return Redirect::to('upload')->withErrors('Invalid image extension we just allow JPG, GIF, PNG');

// $newname = $file_name;
// $file->move($file_path, $newname);
// return 'File Uploaded Successfully';

// });






Route::model('user','User');
Route::model('cats', 'Category');
Route::model('expense', 'Expense');
// Show pages.
Route::get('login','UserController@login');
Route::post('user/login','UserController@postLogin');
Route::get('user/register', 'UserController@getCreate');
Route::post('user/register','UserController@postCreate');
Route::get('logout','UserController@logout');

// Secured urls start from here.

Route::get('/', function()
{
return View::make('hello');
});

Route::get('cats/post/{cats}','CategoryController@showCat');
Route::get('/cats','CategoryController@index');
Route::get('cats/create','CategoryController@getCreate');
Route::get('cats/edit/{cats}','CategoryController@getEdit');
Route::get('cats/delete/{cats}','CategoryController@getDelete');

// Handle form submissions.
Route::post('cats/create','CategoryController@postCreate');
Route::post('cats/edit','CategoryController@postEdit');
Route::post('cats/delete','CategoryController@postDelete');


// Bind route parameters.

// Show pages.
//Route::get('/exp/{id}','ExpenseController@singleExpense');
Route::get('/exp/{cat}','ExpenseController@indexByCategory');
Route::get('/exp/{date}','ExpenseController@indexByDate');
Route::get('/expense','ExpenseController@index');
Route::get('expense/create','ExpenseController@getCreate');
Route::get('expense/edit/{expense}','ExpenseController@getEdit');
Route::get('expense/delete/{expense}','ExpenseController@getDelete');
// Handle form submissions.
Route::post('expense/create','ExpenseController@postCreate');
Route::post('expense/edit','ExpenseController@postEdit');
Route::post('expense/delete','ExpenseController@postDelete');


