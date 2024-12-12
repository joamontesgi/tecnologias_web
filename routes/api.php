<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;


Route::get('/send-sms', [NotificationController::class, 'sendSmsNotification']);
