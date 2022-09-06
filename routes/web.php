<?php

use App\Http\Controllers\HomeCompanyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
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

Route::get('/Home', function () {
   echo '<h1>Halaman Awal Webiste</h1>';
});

Route::prefix('category')->group(function () {
Route::get('/{id}', [ProductsController::class, 'products']);
});

Route::get('/news/{id?}', [NewsController::class, 'news']);

Route::prefix('program')->group(function () {
Route::get('/{id}', [ProgramController::class, 'program']);
});

Route::get('/AboutUs', [AboutUsController::class, 'about']);

Route::resource('contactUs', ContactUsController::class);