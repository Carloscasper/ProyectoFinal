<?php

use App\Http\Controllers\CentroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;
use App\Models\Cita;

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

Route::get('/oncologo', [CentroController::class,'oncologo'])->name('oncologo');
Route::get('/dermatologo', [CentroController::class,'dermatologo'])->name('dermatologo');
Route::get('/pediatra', [CentroController::class,'pediatra'])->name('pediatra');
Route::get('/oftarmologo', [CentroController::class,'oftarmologo'])->name('oftarmologo');
Route::get('/inicio', [CitaController::class,'inicio'])->name('inicio');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
 //   return view('dashboard');
//})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[CitaController::class,'index'])->name('dashboard');

Route::resource('citas', CitaController::class);
Route::resource('centros', CentroController::class);
//Route::get('index', [CentroController::class]); 