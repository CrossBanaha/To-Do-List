<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/* 
Route::get('/', function () {
    return view('task.index');
});
*/
Route::get('/',[TaskController::class,'index']);
Route::post('/', [TaskController::class,'store']);
Route::put('/{id}', [TaskController::class,'update'])->name('task.update');
Route::delete('/{id}', [TaskController::class,'destroy'])->name('task.destroy');