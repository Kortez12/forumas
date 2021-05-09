<?php

use App\Http\Controllers\AutomobiliaiController;
use App\Http\Controllers\KnygosController;
use App\Http\Controllers\LaisvalaikisController;
use App\Http\Controllers\MuzikaController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Auto;
use PhpParser\Node\Stmt\Echo_;

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

Route::resources(['automobiliai' => AutomobiliaiController::class]);
Route::resources(['knygos' => KnygosController::class]);
Route::resources(['laisvalaikis' => LaisvalaikisController::class]);
Route::resources(['muzika' => MuzikaController::class]);

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.name');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//->middleware('verified');
