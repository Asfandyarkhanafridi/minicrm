<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');

Route::middleware('auth')->group(function () {
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::resource('company',\App\Http\Controllers\CompanyController::class);
    Route::resource('employee',\App\Http\Controllers\EmployeeController::class);
});
