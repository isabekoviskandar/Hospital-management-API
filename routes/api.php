<?php

use App\API\Controllers\DirectionController;
use App\API\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('direction')->group(function () {
    Route::get('/index', [DirectionController::class, 'index']);
    Route::post('/create', [DirectionController::class, 'create']);
    Route::put('/update/{id}', [DirectionController::class, 'update']);
    Route::delete('/delete/{id}', [DirectionController::class, 'destroy']);
});

Route::prefix('service')->group( function (){
    Route::get('/index' , [ServiceController::class , 'index']);
    Route::post('/create' , [ServiceController::class , 'create']);
    Route::put('/update/{id}' , [ServiceController::class , 'update']);
    Route::delete('/destroy/{id}' , [ServiceController::class , 'destroy']);
});