<?php

use App\Mail\ContactaMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserJuegosController;
use App\Http\Controllers\Admin\JuegosController;

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
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::group(['middleware' => ['can:admin']], function () {
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/juegos', JuegosController::class);
});


Route::get('juegos',[UserJuegosController::class, 'mostrarJuegos']);
Route::get('portadas',[UserJuegosController::class, 'mostrarPortadas']);


Route::get('contacta',[ContactaController::class,'index'])->name('contacta.index');
Route::post('contacta',[ContactaController::class,'store'])->name('contacta.store');