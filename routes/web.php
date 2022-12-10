<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TraineeController;

Route::get('/', function () {
    return view('index');
});

Route::resource('trainer', TrainerController::class);
Route::resource('trainee', TraineeController::class);

