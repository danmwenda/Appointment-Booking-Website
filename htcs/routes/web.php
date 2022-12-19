<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\navbarController;
use App\Http\Controllers\DashboardController;
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
    return view('home');
});
Route::get('/index', function() {
    return view('index');
});

Route::get('/form', [HomeController::class, 'form']);
Route::get('/formconfig', [HomeController::class, 'formconfig']);
Route::get('/admin', [HomeController::class, 'admin']);

Route::get('/services', [NavbarController::class, 'services']);
Route::get('/about', [NavbarController::class, 'about']);
Route::get('/contacts', [NavbarController::class, 'contacts']);
//Route::get('/session', [NavbarController::class, 'session']);

Route::get('/show', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);
//Route::get('/login', 'LoginController@session');

Route::get('/showform', [FormController::class, 'showform']);
Route::post('/datainsert', [FormController::class, 'datainsert']);

Route::resource('/client', DashboardController::class);
