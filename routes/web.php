<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
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
    return view('dashboard.master');
});

Route::get('/', 'DashboardController@index')->name('home');
Route::resource('siswa', 'SiswaController');
Route::get('/siswa/print/{id}', [SiswaController::class, 'print'])->name('siswaPrint');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
