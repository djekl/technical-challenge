<?php

use App\Http\Controllers\Api\CreateBookController;
use App\Http\Controllers\Api\GetCollectorSummaryController;
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

Route::post('books', [CreateBookController::class, '__invoke']);
Route::get('books/{uuid}', [GetBookController::class, '__invoke']);
Route::get('collectors/{id}/recently-added', [GetCollectorSummaryController::class, '__invoke']);
