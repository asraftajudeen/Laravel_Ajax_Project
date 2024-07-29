<?php

use App\Http\Controllers\TodoController;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
Route::get('/', [TodoController::class,'index']);
Route::post('/add', [TodoController::class,'add']);
Route::post('/update/{id}', [TodoController::class,'update']);
Route::get('delete/{id}',[TodoController::class,'delete']);
Route::get('/done/{id}', [TodoController::class,'done']);
