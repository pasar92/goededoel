<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PeriodController;
use App\Http\controllers\CharityController;
use App\Http\Controllers\PeriodItemsController;

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
  //return view('charity.index');
  return view('charities.index', [CharityController::class]);
});

Route::resource('charity', CharityController::class);
Route::resource('period', PeriodController::class);
// http://127.0.0.1:8000/cars


Route::resource('period.periodItems', PeriodItemsController::class);

// localhost/period/id van de period 1/periodItems/.....

Route::resource('charities.periodItems', PeriodItemsController::class);
// localhost/charities/1/periodItems/.....

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
