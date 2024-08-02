<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::resource('tasks', TaskController::class)->except(['create','show','edit']);
Route::patch('/{task}', [TaskController::class, 'toggleStatus'])->name('tasks.toggleStatus');
//Route::get('/',[TaskController::class,'index']);
//Route::post('/', [TaskController::class,'store'])->name('task.store');
//Route::put('/task/{id}', [TaskController::class, 'update'])->name('task.update');
//Route::delete('/{id}', [TaskController::class, 'destroy'])->name('task.destroy');