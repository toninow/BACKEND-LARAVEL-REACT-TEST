<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MaterialesController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(MaterialesController::class)->group(function () {
    Route::get('/materiales', 'index');
    Route::post('/materiales', 'store');
    Route::get('/materiales/{id}', 'show');
    Route::put('/materiales/{id}', 'update');
    Route::delete('/materiales/{id}', 'destroy');

});
