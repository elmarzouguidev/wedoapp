<?php

use App\Http\Controllers\Developper\DevController;
use Illuminate\Support\Facades\Route;

Route::get('/link', [DevController::class, 'storageLink']);
Route::get('/unlink', [DevController::class, 'storageUnLink']);

Route::get('/migrate', [DevController::class, 'migrateAll']);

Route::get('/migrate-fresh', [DevController::class, 'migrateFresh']);

Route::get('/seed', [DevController::class, 'migrateSeed']);

Route::get('/cache', [DevController::class, 'cacheAll']);
Route::get('/clear', [DevController::class, 'cleareAll']);

Route::get('/app-up', [DevController::class, 'appUp']);
Route::get('/app-down', [DevController::class, 'appDown']);

Route::get('/site-map', [DevController::class, 'siteMap']);
