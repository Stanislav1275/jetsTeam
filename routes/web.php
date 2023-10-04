<?php

use App\Http\Controllers\ImpersonateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::group(['middleware' => 'auth'], function () {
    Route::resource("/tasks", \App\Http\Controllers\TaskController::class);
    Route::resource("/users", \App\Http\Controllers\UserController::class);
    Route::get('impersonate/{user_id}', [ImpersonateController::class, 'impersonate'])->name('impersonate');
    Route::get('stop-impersonating', [ImpersonateController::class, 'stopImpersonating'])->name('stopImpersonating');
});

