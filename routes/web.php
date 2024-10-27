<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorLogin;
use App\Http\Controllers\ControladorPersonal;

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

Route::name('personal')->get('/personal',[ControladorPersonal::class,'personal']);
Route::name('personal_alta')->get('/personal_alta',[ControladorPersonal::class,'personal_alta']);
Route::name('personal_registrar')->post('/personal_registrar', [ControladorPersonal::class, 'personal_registrar']);
Route::name('personal_detalle')->get('/personal_detalle/{id}',[ControladorPersonal::class, 'personal_detalle']);
Route::name('personal_editar')->get('/personal_editar/{id}', [ControladorPersonal::class, 'personal_editar']);
Route::name('personal_actualizar')->put('/personal_actualizar/{id}', [ControladorPersonal::class, 'personal_actualizar']);
Route::name('personal_borrar')->get('/personal_borrar/{id}', [ControladorPersonal::class, 'personal_borrar']);