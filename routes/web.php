<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ApplyForJobController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| website Routes
|--------------------------------------------------------------------------
*/

Route::group(
    [
        'prefix'     => LaravelLocalization::setLocale() . '/',
        'as'         => 'website.',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {

        //view home users
        Route::get('/', [HomeController::class, 'index'])->name('home');

        //applyForJobs
        Route::resource('/applyForJobs', ApplyForJobController::class)->names('applyForJobs');

        //view home users
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        //post contact
        Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

        //view home users
        Route::get('/about', [AboutController::class, 'index'])->name('about');

        //view home users
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');

        //view home users
        Route::get('/faq', [FaqController::class, 'index'])->name('faq');

        //view home users
        Route::get('/applyForJob', [ApplyForJobController::class, 'index'])->name('applyForJob');

    });
require __DIR__ . '/dashboard.php';
require __DIR__ . '/auth.php';
