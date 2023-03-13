<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin/users', function() {
    return view('admin.user');
});

Route::get('/admin/clients', function() {
    return view('admin.client');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Route
Route::get('/admin/getData', [App\Http\Controllers\AdminController::class, 'data'])->name('adminData');
Route::get('/admin/getHarga', [App\Http\Controllers\AdminController::class, 'harga'])->name('adminHarga');
Route::get('/admin/getUsers', [App\Http\Controllers\AdminController::class, 'users'])->name('adminUsers');
Route::get('/admin/getClients', [App\Http\Controllers\AdminController::class, 'clients'])->name('adminClients');

Route::get('/pickupTable', [App\Http\Controllers\PickupController::class, 'index'])->name('pickupTable');
Route::get('/pickup/data', [App\Http\Controllers\PickupController::class, 'pickupData'])->name('pickupData');
