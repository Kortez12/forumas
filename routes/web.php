<?php

use App\Http\Controllers\AutomobiliaiController;
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
    return view('index');
});
Route::get('/miestai', [App\Http\Controllers\CitiesController::class, 'index']);
Route::get('/carousel', [App\Http\Controllers\CarouselController::class, 'carousel']);

Route::resources(['automobiliai' => AutomobiliaiController::class]);

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.name');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
