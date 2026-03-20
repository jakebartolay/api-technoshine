<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ServiceController;

Route::get('/users', [UserController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);