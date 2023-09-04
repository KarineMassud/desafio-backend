<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectsController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('students',[StudentsController::class, 'index']);
Route::get('students/{id}',[StudentsController::class, 'show']);
Route::post('students',[StudentsController::class, 'store']);
Route::put('students/{id}',[StudentsController::class, 'update']);
Route::delete('students/{id}',[StudentsController::class, 'destroy']);

Route::get('subjects',[SubjectsController::class, 'index']);
Route::get('subjects/{id}',[SubjectsController::class, 'show']);
Route::post('subjects',[SubjectsController::class, 'store']);
Route::put('subjects/{id}',[SubjectsController::class, 'update']);
Route::delete('subjects/{id}',[SubjectsController::class, 'destroy']);






