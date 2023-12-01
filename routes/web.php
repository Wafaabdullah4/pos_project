<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\UserController;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

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
    return view('LandingPage');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/myorder', [PesananController::class, 'myorder'])->name('myorder');
    Route::get('/home', [MenuController::class, 'menu'])->name('menu');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('users', UserController::class);
    Route::get('/admin/siswa', [UserController::class, 'siswa'])->name('admin.siswa');
    Route::resource('menu', MenuController::class);
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:kurir'])->group(function () {

    Route::get('/kurir/home', [HomeController::class, 'kurirHome'])->name('kurir.home');
});


Route::resource('pesanans', PesananController::class);



Route::get('kurirorder', [PesananController::class, 'kurirorder'])->name('kurirorder');

