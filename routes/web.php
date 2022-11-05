<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/view/{view}', [pageController::class, 'showpageview']);
// Route::get('/css/{css}', function () {return View("")} );

Route::get('/', [pageController::class, 'main']);
Route::get('/profile', [pageController::class, 'profile']);
Route::get('/profile/{userName}', [pageController::class, 'showUser']);
Route::get('/login', [pageController::class, 'login']);
