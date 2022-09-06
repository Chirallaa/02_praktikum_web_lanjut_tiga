<?php

use App\Http\Controllers\HomeCompanyController;
use App\Http\Controllers\ProductsController;
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

Route::get('.Home', [HomeCompanyController::class, 'index']);

Route::prefix('category')->group(function()) {
    Route::get('/{id}', [ProductsController::class, 'products']);
});

});
Route::resource('contactUs', ContactUsController::class);