<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'welcome');
});

Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'render'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register');
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'render'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login');

Route::middleware('auth')->group(function () {
    Route::prefix('app')->name('app.')->group(function () {

        // management role dan permission
        Route::get('/permission', [App\Http\Controllers\Admin\Permission\PermissionController::class, 'render'])->name('permission.index');
        Route::get('/permission/create', [App\Http\Controllers\Admin\Permission\PermissionController::class, 'create'])->name('permission.create');

        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'render'])->name(name: 'index');
        Route::get('/pendaftaran', [App\Http\Controllers\Admin\Pendaftaran\PendaftaranController::class, 'render'])->name(name: 'pendaftaran.index');
        Route::get('/pendaftaran/create', [App\Http\Controllers\Admin\Pendaftaran\PendaftaranController::class, 'create'])->name(name: 'pendaftaran.create');
        Route::post('/pendaftaran', [App\Http\Controllers\Admin\Pendaftaran\PendaftaranController::class, 'store'])->name('pendaftaran.store');
        Route::get('/pendaftaran/download/{id}', [App\Http\Controllers\Admin\Pendaftaran\PendaftaranController::class, 'download'])->name(name: 'pendaftaran.download');

        // pembayaran route
        Route::get('/pembayaran', [App\Http\Controllers\Admin\Pembayaran\PembayaranController::class, 'render'])->name('pembayaran.index');
        Route::get('/verifikasi/pembayaran', [App\Http\Controllers\Admin\Pembayaran\PembayaranController::class, 'verifikasipembayaran'])->name('pembayarans.index');
        Route::put('/pembayaran/update/{id}', [App\Http\Controllers\Admin\Pembayaran\PembayaranController::class, 'update'])->name('pembayaran.update');
        Route::put('/pembayaran/update/status/{id}', [App\Http\Controllers\Admin\Pembayaran\PembayaranController::class, 'updateStatus'])->name('pembayaran.update.status');

        // verifikasi route
        Route::get('/verification', [App\Http\Controllers\Admin\Verifikasi\VerificationController::class, 'render'])->name('verification.index');
        Route::get('/verification/edit/{id}', [App\Http\Controllers\Admin\Verifikasi\VerificationController::class, 'edit'])->name('verification.edit');
        Route::put('/verification/update/{id}', [App\Http\Controllers\Admin\Verifikasi\VerificationController::class, 'update'])->name('verification.update');
        // logout
        Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'distroy'])->name('logout');
    });
});
