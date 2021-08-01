<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
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

Route::get('/',[TestController::class, 'index']);
Route::get('/tasks/create', [TestController::class, 'create']);
Route::post('/tasks',[TestController::class, 'store']);
Route::post('/complete/{id}',[TaskController::class, 'complete']);
Route::delete('/tasks/{id}', [TaskController::class, 'delete']);
Route::get('/tasks/edit/{id}', [TestController::class, 'edit']);
Route::post('/update', [TestController::class, 'update']);
// ROute::resource('tasks', TestController::class);
