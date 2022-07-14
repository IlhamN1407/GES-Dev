<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataPenawaran;
use App\Http\Controllers\Email;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenawaranController;
use App\Mail\WelcomeMail;
use App\Models\Penawaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [HomeController::class, 'index']) ->name('home');
Route::get('/about', [AboutController::class, 'index']) ->name('about');

Route::get('/Penawaran', [PenawaranController::class, 'index']) ->name('penawaran');
Route::post('/Penawaran', [PenawaranController::class, 'store']);

Route::prefix('admin')
        ->namespace('Admin')
        ->middleware(['auth', 'admin'])
        ->group(function() {
            Route::get('/', [DashboardController::class, 'index']) 
            ->name('dashboard');

            Route::get('/cetak', [DataPenawaran::class, 'cetakPenawaran']);

            Route::resource('DataPenawaran', '\App\\Http\Controllers\Admin\DataPenawaran');
            
        });
Auth::routes();






