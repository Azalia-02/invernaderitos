<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorLogin;

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

Route::get('/', function () {
    return view('welcome');
});

Route::name('login')->get('/login',[ControladorLogin::class, 'login']);
Route::name('login_alta')->get('/login_alta',[ControladorLogin::class, 'login_alta']);
Route::name('login_registrar')->post('/login_registrar',[ControladorLogin::class, 'login_registrar']);