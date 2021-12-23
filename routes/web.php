<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\DashboardController;

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
    // return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//guru

Route::resource('/guru', GuruController::class)->middleware('auth');
Route::resource('/dashboard', DashboardController::class)->middleware('auth');


//template
Route::get('/index', [App\Http\Controllers\FormulirController::class, 'index'])->name('index')->middleware('auth');
Route::get('/nilaikelulusan', [App\Http\Controllers\FormulirController::class, 'afterdetail'])->name('after')->middleware('auth');
Route::get('/cetakabsen', [App\Http\Controllers\FormulirController::class, 'cetakabsen'])->name('cetakabsen')->middleware('auth');
Route::get('/absen', [App\Http\Controllers\FormulirController::class, 'absen'])->name('absen')->middleware('auth');
Route::get('/Card', [App\Http\Controllers\FormulirController::class, 'card'])->name('card')->middleware('auth');
Route::get('/cetakcard/{id}', [App\Http\Controllers\FormulirController::class, 'cetakcard'])->name('cetakcard')->middleware('auth');
Route::get('/beforedetailshow', [App\Http\Controllers\FormulirController::class, 'beforedetailshow'])->name('show');
Route::get('/tableuser', [App\Http\Controllers\FormulirController::class, 'tableusershow'])->name('tableusershow');
Route::get('/detail', [App\Http\Controllers\FormulirController::class, 'detail'])->name('detail');
Route::post('/store', [App\Http\Controllers\FormulirController::class, 'store'])->name('store');
Route::put('/edit/{id}', [App\Http\Controllers\FormulirController::class, 'update'])->name('update');
