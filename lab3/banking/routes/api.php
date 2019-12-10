<?php

use Illuminate\Http\Request;
use Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/clients', 'ClientController');

Route::apiResource('/credits', 'CreditController');

Route::apiResource('/accstatus', 'AccStatusController');

Route::apiResource('/paystatus', 'PayStatusController');

Route::apiResource('/accounts', 'AccountController');

Route::apiResource('/payments', 'PaymentController');

Route::apiResource('/autopayments', 'AutopaymentController');