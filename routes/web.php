<?php

use App\Http\Controllers\WEDOAPP\CareerController;
use App\Http\Controllers\WEDOAPP\CompanyController;
use App\Http\Controllers\WEDOAPP\EventController;
use App\Http\Controllers\WEDOAPP\HomeController;
use App\Http\Controllers\WEDOAPP\PartnerController;
use App\Http\Controllers\WEDOAPP\TeamController;
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

    Route::group(['prefix' => 'company'], function () {
        Route::get('/', [CompanyController::class, 'index'])->name('company');
        Route::get('/about', [CompanyController::class, 'index'])->name('company.about');
        Route::get('/partner', [PartnerController::class, 'index'])->name('company.partner');
        Route::get('/career', [CareerController::class, 'index'])->name('company.career');
        Route::get('/events', [EventController::class, 'index'])->name('company.event');
        Route::get('/events/{event?}', [EventController::class, 'single'])->name('company.event.single');

        Route::get('/teams', [TeamController::class, 'index'])->name('company.teams');
    });
});
