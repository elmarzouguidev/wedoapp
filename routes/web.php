<?php

use App\Http\Controllers\WEDOAPP\CompanyController;
use App\Http\Controllers\WEDOAPP\HomeController;
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
Route::group(['middleware' => 'compress_html'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/company', [CompanyController::class, 'index'])->name('company');
});
