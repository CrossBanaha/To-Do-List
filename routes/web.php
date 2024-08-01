<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::get('/',[TaskController::class,'index']);
Route::post('/', [TaskController::class,'store'])->name('task.store');
Route::put('/task/{id}', [TaskController::class, 'update'])->name('task.update');
Route::patch('/{id}', [TaskController::class, 'toggleStatus'])->name('task.toggleStatus');
Route::delete('/{id}', [TaskController::class, 'destroy'])->name('task.destroy');