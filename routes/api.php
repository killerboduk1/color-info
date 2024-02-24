<?php

use App\Http\Controllers\ColorApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/color/{color}', [ColorApiController::class, 'getColor'])->whereAlpha('color');

