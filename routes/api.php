<?php

use App\API\Controllers\DirectionController;
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


});