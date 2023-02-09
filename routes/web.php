<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\Lines\BellezaController;
use App\Http\Controllers\Lines\CuidadopController;
use App\Http\Controllers\Lines\BienestarController;
use App\Http\Controllers\Services\DiseñoController;
use App\Http\Controllers\Services\EnvaseController;
use App\Http\Controllers\Lines\IndustrialController;
use App\Http\Controllers\Services\AcabadoController;
use App\Http\Controllers\Lines\SanitizanteController;
use App\Http\Controllers\Services\ImpresionController;
use App\Http\Controllers\Services\DesarrolloController;
use App\Http\Controllers\Services\EtiquetadoController;

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

Route::get('/crea-tu-marca-de-cosméticos',[FormController::class,'index'])->name('mimarca.index');
Route::post('/storemimarca',[FormController::class,'store'])->middleware(['auth'])->name('mimarca.store');
Route::resource('mi-marca', FormController::class)->names('mimarca')->except(['destroy']);




Route::get('/belleza',[BellezaController::class,'index'])->name('belleza.index');
Route::resource('belleza', BellezaController::class)->names('belleza')->except(['destroy']);

Route::get('/bienestar',[BienestarController::class,'index'])->name('bienestar.index');
Route::resource('bienestar', BienestarController::class)->names('bienestar')->except(['destroy']);

Route::get('/cuidado-personal',[CuidadopController::class,'index'])->name('cuidadop.index');
Route::resource('cuidado-personal', CuidadopController::class)->names('cuidadop')->except(['destroy']);

Route::get('/linea-industrial',[IndustrialController::class,'index'])->name('industrial.index');
Route::resource('linea-industrial', IndustrialController::class)->names('industrial')->except(['destroy']);

Route::get('/sanitizante',[SanitizanteController::class,'index'])->name('sanitizante.index');
Route::resource('sanitizante', SanitizanteController::class)->names('sanitizante')->except(['destroy']);


