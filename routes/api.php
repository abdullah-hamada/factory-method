<?php

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::post('/notify', [NotificationController::class, 'send']);
Route::post('/product/create', [ProductController::class, 'create']);
