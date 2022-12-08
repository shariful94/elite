<?php

use App\Http\Controllers\AllinputController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);

    // category
    Route::resource("/product", ProductController::class);

    // tag
    Route::resource("/tag", TagController::class);

    // all input
    Route::resource("/allinput", AllinputController::class);

});

require __DIR__.'/auth.php';
