<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::group([
        'prefix' => 'master',
        'as' => 'master.',
    ], function () {

        Route::group([
            'prefix' => 'daerah',
            'as' => 'daerah.',
            'controller' => App\Http\Controllers\Master\DaerahController::class
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}', 'show')->name('show');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });

        Route::group([
            'prefix' => 'cabang',
            'as' => 'cabang.',
            'controller' => App\Http\Controllers\Master\CabangController::class
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}', 'show')->name('show');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });

        Route::group([
            'prefix' => 'kolat',
            'as' => 'kolat.',
            'controller' => App\Http\Controllers\Master\KolatController::class
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}', 'show')->name('show');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });

        Route::group([
            'prefix' => 'tingkatan',
            'as' => 'tingkatan.',
            'controller' => App\Http\Controllers\Master\TingkatanController::class
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}', 'show')->name('show');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });

        Route::group([
            'prefix' => 'kta',
            'as' => 'kta.',
            'controller' => App\Http\Controllers\Master\KtaController::class
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}', 'show')->name('show');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });

        Route::group([
            'prefix' => 'signature',
            'as' => 'signature.',
            'controller' => App\Http\Controllers\Master\SignatureController::class
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}', 'show')->name('show');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::get('/account', [App\Http\Controllers\Auth\AccountController::class, 'index'])->name('auth.account');
        Route::post('/account', [App\Http\Controllers\Auth\AccountController::class, 'account_update'])->name('auth.account.update');
        Route::get('/account/settings', [App\Http\Controllers\Auth\AccountController::class, 'setting'])->name('auth.account.settings');
        Route::post('/account/settings', [App\Http\Controllers\Auth\AccountController::class, 'setting_update'])->name('auth.account.settings.update');

        Route::group([
            'prefix' => 'users',
            'as' => 'users.',
            'controller' => App\Http\Controllers\UserController::class
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{user}', 'show')->name('show');
            Route::get('/{user}/edit', 'edit')->name('edit');
            Route::put('/{user}', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });

        Route::group([
            'prefix' => 'roles',
            'as' => 'roles.',
            'controller' => App\Http\Controllers\RoleController::class
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{role}/edit', 'edit')->name('edit');
            Route::put('/{role}', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });

        Route::get('permissions', [App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');
    });

    Route::get('/settings', [App\Http\Controllers\SettingController::class, 'index'])->name('settings.index');
});


Route::group([
    'prefix' => 'ajax',
    'as' => 'ajax.',
], function() {
    Route::get('daerah', [App\Http\Controllers\Ajax\AjaxController::class, 'getDaerah'])->name('daerah');
    Route::get('cabang/{code?}', [App\Http\Controllers\Ajax\AjaxController::class, 'getCabang'])->name('cabang');
    Route::get('kolat/{code?}', [App\Http\Controllers\Ajax\AjaxController::class, 'getKolat'])->name('kolat');
});
