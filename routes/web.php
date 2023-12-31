<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('/');
Route::get('/git-pull', [App\Http\Controllers\HomeController::class, 'pull']);


Auth::routes();

Route::middleware('auth')->group(function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/product', App\Http\Controllers\ProductsController::class);
Route::get('/search', [App\Http\Controllers\ProductsController::class, 'search'])->name('search');
Route::resource('/banner', App\Http\Controllers\BannersController::class);
});