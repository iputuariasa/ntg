<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CscreditController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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
Route::middleware(['guest'])->group(function(){
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['admin'])->group(function(){
    Route::get('/admins/users', [UserController::class, 'index']);
    Route::post('/admins/users_store', [UserController::class, 'store']);
    Route::post('/admins/users_import', [UserController::class, 'import']);
    Route::delete('/admins/users_destroy/{user}', [UserController::class, 'destroy']);

});

Route::middleware(['operator'])->group(function(){
    
});

Route::middleware(['cs'])->group(function(){
    Route::get('/submission', [CscreditController::class, 'submissionindex']);
});

Route::middleware(['user'])->group(function(){
    Route::get('/create_submission', [CscreditController::class, 'submissioncreate']);
});