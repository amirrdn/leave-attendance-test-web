<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AttendanceController;
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
Route::get('/annual-leaves', [AttendanceController::class, 'index']);
Route::post('/annual-leaves', [AttendanceController::class, 'store']);
Route::get('/annual-leaves/{$id}', [AttendanceController::class, 'view'])->name('view-leaves');
