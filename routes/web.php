<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Services\DesarrolloController;
use App\Http\Controllers\Services\DiseñoController;
use App\Http\Controllers\Services\EnvaseController;
use App\Http\Controllers\Services\ImpresionController;
use App\Http\Controllers\Services\EtiquetadoController;
use App\Http\Controllers\Services\AcabadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Blog\BlogController;

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
    return view('pages.home');
});

Route::get('/desarrollo',[DesarrolloController::class,'index'])->name('viewdesarrollo');
Route::get('/diseño',[DiseñoController::class,'index'])->name('viewdiseño');
Route::get('/envase',[EnvaseController::class,'index'])->name('viewenvase');
Route::get('/impresion',[ImpresionController::class,'index'])->name('viewimpresion');
Route::get('/etiquetado',[EtiquetadoController::class,'index'])->name('viewetiquetado');
Route::get('/acabado',[AcabadoController::class,'index'])->name('viewacabado');
Route::post('/contact-us', [HomeController::class, 'contact'])->name('contact-us');

Route::get('/blog',[BlogController::class,'index'])->name('viewblog');
