<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/* 
Route::get('/', function () {
    return view('task.index');
});
*/
//Route::resource('task','TaskController');
Route::get('/',[TaskController::class,'index']);
Route::post('/', [TaskController::class,'store'])->name('task.create');
Route::put('/{id}', [TaskController::class,'update'])->name('task.update');
Route::patch('/{id}/toogle-status',[TaskController::class,'toggleStatus'])->name('task.toggleStatus');
Route::delete('/{id}', [TaskController::class,'destroy'])->name('task.destroy');