<?php

use App\Http\Controllers\PaymentMethodController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/payment_methods', [PaymentMethodController::class, 'index']);
Route::get('/payment_methods/{id}', [PaymentMethodController::class, 'show']);