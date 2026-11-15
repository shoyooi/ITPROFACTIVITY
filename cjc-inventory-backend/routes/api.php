<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/create-item', [\App\Http\Controllers\ItemController::class, 'create']);
Route::patch('/update-item',[\App\Http\Controllers\ItemController::class, 'update']);
Route::delete('/delete-item', [\App\Http\Controllers\ItemController::class, 'destroy']);
Route::get('/items', [\App\Http\Controllers\ItemController::class, 'all']);

Route::post('/create-category', [\App\Http\Controllers\CategoriesController::class, 'create']);
Route::patch('/update-category', [\App\Http\Controllers\CategoriesController::class, 'update']);
Route::delete('/delete-category', [\App\Http\Controllers\CategoriesController::class, 'destroy']);
Route::get('/categories', [\App\Http\Controllers\CategoriesController::class, 'all']);

Route::post('/create-customer', [\App\Http\Controllers\CustomerController::class, 'create']);
Route::patch('/update-customer', [\App\Http\Controllers\CustomerController::class, 'update']);
Route::delete('/delete-customer', [\App\Http\Controllers\CustomerController::class, 'destroy']);
Route::get('/customers', [\App\Http\Controllers\CustomerController::class, 'all']);
