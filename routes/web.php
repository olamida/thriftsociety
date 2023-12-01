<?php

use App\Http\Controllers\LocaleController;

/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

// Backend Office Dashboard
Route::view('/welcome', 'backend.office.dashboard')->name('office.welcome');

// Switch between the included languages
Route::view('/testPage', 'backend.office.dashboard');

// Members index page
Route::view('/members', 'backend.office.members.index');

// Loan Repayment status page
Route::view('/repayment', 'backend.office.loans.repayment-status');

/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__.'/backend/');
});
