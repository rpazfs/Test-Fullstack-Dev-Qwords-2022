<?php

use App\Http\Controllers\HostingController;
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

Route::get('/', [ HostingController::class, "show" ])->name('hosting.detail');
Route::get('/add', [ HostingController::class, "index" ])->name('hosting.index');
Route::post('/submit', [ HostingController::class, "store" ])->name('hosting.store');
Route::get('/edit/{hostingId}', [ HostingController::class, "edit" ])->name('hosting.edit');
Route::post('/update/{hostingId}', [ HostingController::class, "update" ])->name('hosting.update');
Route::get('/delete/{hostingId}', [ HostingController::class, "destroy" ]);