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

Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as' => 'todos'
]);

Route::get('/todo/new', [
    'uses' => 'TodosController@new',
    'as' => 'todo.new'
]);

// Route Delete
Route::get('/todo/delete/{id}', [
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);

// Route Update
Route::get('/todo/update/{id}', [
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);

// Route Edit
Route::post('/todo/edit/{id}', [
    'uses' => 'TodosController@edit',
    'as' => 'todo.edit'
]);

// Route Completed
Route::get('/todo/completed/{id}', [
    'uses' => 'TodosController@completed',
    'as' => 'todo.completed'
]);