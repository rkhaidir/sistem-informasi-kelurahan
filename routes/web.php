<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RwController;
use App\Http\Controllers\Admin\RtController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::name('admin.')->prefix('admin')
    ->middleware(['auth'])
    ->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::name('wilayah.')->prefix('wilayah')
        ->group(function () {
            Route::resource('/rw', RwController::class);
            Route::resource('/rt', RtController::class);
        });
});

