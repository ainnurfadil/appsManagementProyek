<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/tasks/create/{projectId}', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/{projectId}', [TaskController::class, 'store'])->name('tasks.store');
/* Route::get('/', function () {
    return view('index');
}); */
