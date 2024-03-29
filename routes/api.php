<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('auth/login', 'Auth\LoginController@apiLogin');

Route::middleware('auth:api')->group(function () {
    Route::post('/apply-loan',      'LoanController@store');
    Route::post('/repayment-loan',  'LoanController@repayment');
});