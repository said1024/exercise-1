<?php

use App\Http\Controllers\bookController;
use Illuminate\Support\Facades\Route;

Route::prefix("/api/books/")->group(function () {

    Route::post('', [bookController::class,'store']);
    Route::get('{id}', [bookController::class, 'showById']);
    Route::get('', [bookController::class,'paginatedDisplay']);
    Route::put('{id}', [bookController::class,'update']);
    Route::delete('{id}', [bookController::class,'destroy']);



});

Route::get('/', function () {
    return view('welcome');
});










