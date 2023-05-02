<?php

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
    return view('welcome');
});

Route::get('/home/verusers', [App\Http\Controllers\HomeController::class, 'verUsers'])->name('verUsers');
Route::get('/home/verroles', [App\Http\Controllers\HomeController::class, 'verRoles'])->name('verRoles');
Route::get('/home/vermenus', [App\Http\Controllers\HomeController::class, 'verMenus'])->name('verMenus');

