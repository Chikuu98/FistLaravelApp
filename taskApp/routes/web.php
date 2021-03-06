<?php

use App\Http\Controllers\TaskController;
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

Route::get('/task', function () {
    $data=App\Models\Task::all();
    return view('task')->with('tasks',$data);
});

Route::post('/saveTask',[TaskController::class, 'store']);

Route::get('/markasCompleted/{id}',[TaskController::class, 'updateTaskAsCompleted']);

Route::get('/markasnotCompleted/{id}',[TaskController::class, 'updateTaskAsNotCompleted']);

Route::get('/deleteTask/{id}',[TaskController::class, 'deleteTask']);

Route::get('/editTask/{id}',[TaskController::class, 'editTaskView']);

Route::post('/updateTask',[TaskController::class, 'updateTask']);