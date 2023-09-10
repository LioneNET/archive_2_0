<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['api']], function () {
    Route::prefix('v1')->group(function () {
        Route::group(['middleware' => ['auth:sanctum']], function () {
            Route::get('upload', [UploadController::class, 'chunkUpload']);
        });

        Route::post('create_token', [LoginController::class, 'login']);
    });
});
