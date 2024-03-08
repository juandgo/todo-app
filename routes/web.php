<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'TasksController@index');
// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/create', 'TasksController@create');
// Route::post('/tasks', 'TasksController@store');

Route::get('/', [TasksController::class, 'index']);
Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/tasks/create', [TasksController::class, 'create']);
Route::post('/tasks', [TasksController::class, 'store']);


