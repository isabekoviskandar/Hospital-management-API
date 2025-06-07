<?php

use App\Http\Controllers\DirectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/index' , [DirectionController::class, 'index']);
Route::post('/create' , [DirectionController::class , 'create']);
Route::put('/update/{id}' , [DirectionController::class, 'update']);
Route::delete('/delete/{id}' , [DirectionController::class, 'destroy']);