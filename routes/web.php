<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/', [TaskController::class, 'store']);
Route::patch('tasks/{id}', [TaskController::class, 'update']);
Route::delete('/tasks/{id}', [TaskController::class, 'delete']);
Route::get('/tasks/edit/{name}', [TaskController::class, 'edit'])->name('edite');
Route::put('/tasks/{id}', [TaskController::class, 'editUpdate']);