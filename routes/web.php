<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskscontroller;

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

Route::get('/update-tasks/{id}', [taskscontroller::class, 'update_tasks']);
Route::get('/tasks', [taskscontroller::class, 'liste_tasks']);
Route::get('/ajouter', [taskscontroller::class, 'ajouter_tasks']);
Route::post('/ajouter/traitement', [taskscontroller::class, 'ajouter_tasks_traitement']);
