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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;
use App\todo_lists;


//Register & Login 
Route::get('register', function () {
    return view('create');
});
Route::post('register', 'RegistrationController@store');

Route::get('log', function () {
    return view('login');
});
Route::post('/login', 'SessionsController@store');

//CRUD OPERATIONS
Route::get('/', 'TodoListsController@showAllData');

Route::get('create', 'TodoListsController@create');

Route::get('todo_submit', 'TodoListsController@todo_submit');

Route::get('delete/{id}', 'TodoListsController@delete');

Route::get('edit/{id}', 'TodoListsController@edit');

Route::get('edit_todo/{id}', 'TodoListsController@edit_todo');

//LOGOUT
Route::get('/logout', 'SessionsController@destroy');




