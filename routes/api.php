<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChildController;

Route::apiResource('/user', UserController::class)->only(['show','store','update']);
Route::apiResource('/child', ChildController::class)->only(['show','store','update','destroy']);
