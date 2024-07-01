<?php

use App\Events\SendNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/send-notification', function (Request $request) {
    SendNotification::dispatch($request->input('message'));
});
