<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [AppController::class, 'index'])->name('home');

//Route::get('/', [AppController::class, 'index'])->name('home');

Route::get('/test', [AppController::class, 'about'])->name('acerca_de');

/*Route::get('/home/verusers', [App\Http\Controllers\HomeController::class, 'verUsers'])->name('verUsers');
Route::get('/home/verroles', [App\Http\Controllers\HomeController::class, 'verRoles'])->name('verRoles');
Route::get('/home/vermenus', [App\Http\Controllers\HomeController::class, 'verMenus'])->name('verMenus');
*/

//Route::get('login', [App\Http\Controllers\LoginController::class, 'acceder'])->name('login');
