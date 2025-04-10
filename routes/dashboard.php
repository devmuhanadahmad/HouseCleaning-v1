<?php

use App\Http\Controllers\Backend\ApplyForJobController;
use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardAdminController;
use App\Http\Controllers\Backend\OrdersController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
|
*/

Route::group([
    'prefix'     => '/dashboard',
    'as'         => 'dashboard.',
    'middleware' => 'isAdmin',
], function () {

    //view dashboard admin
    Route::get('/admin', [DashboardAdminController::class, 'index'])->name('dashboardAdmin');

    //edit profile admin
    Route::get('/admin/edit/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/admin/edit/profile', [ProfileController::class, 'update']);

    //edit password admin
    Route::get('/admin/edit/password', [ChangePasswordController::class, 'edit'])->name('password.edit');
    Route::put('/admin/edit/password', [ChangePasswordController::class, 'update']);

    //apply for job
    Route::resource('/applyForJobs', ApplyForJobController::class)->names('applyForJobs');
    Route::post('applyForJobs/sendEmail', [ApplyForJobController::class, 'sendEmail'])->name('applyForJob.sendEmail');

    //users
    Route::resource('/users', UsersController::class)->names('users');

    //contact us
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::delete('/contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
    Route::post('contact/sendEmail', [ContactController::class, 'sendEmail'])->name('contact.sendEmail');

    //setting
    Route::get('/settings', [SettingController::class, 'create'])->name('settings');
    Route::post('/settings', [SettingController::class, 'store']);

    //orders
    Route::resource('/orders', OrdersController::class)->names('orders');
    Route::get('/pending/orders', [OrdersController::class, 'pendingOrders'])->name('orders.pendingOrders');
    Route::get('/confirmed/orders', [OrdersController::class, 'confirmedOrders'])->name('orders.confirmedOrders');
    Route::post('/orders/{id}/sendMailDate', [OrdersController::class, 'sendMailDate'])->name('orders.sendMailDate');



});

Route::get('/admin', [DashboardAdminController::class, 'index'])->name('dashboard.dashboardAdmin')->middleware('auth:admin');
