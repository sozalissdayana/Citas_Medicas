<?php

use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnfermedadesController;
use App\Http\Controllers\ApiAppsController;
use Illuminate\Http\Request;
use App\Http\Controllers\PacientesController;


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
})->middleware('auth');


Auth::routes(['register'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){

    Route::prefix('app')->group(function(){
        Route::prefix('pacientes')->group(function(){
            Route::get('', [PacientesController::class, 'index'])->name('paciente');
            Route::get('add', [PacientesController::class, 'add'])->name('paciente.add');
            Route::get('edit/{model}', [PacientesController::class, 'edit'])->name('paciente.edit');
            Route::post('', [PacientesController::class, 'store'])->name('paciente.store');
            Route::patch('{model}', [PacientesController::class, 'update'])->name('paciente.update');
            Route::delete('{model}', [PacientesController::class, 'destroy'])->name('paciente.delete');
        });
    });

    Route::prefix('catalogos')->group(function(){
        Route::prefix('enfermedades')->group(function () {
            Route::get('', [EnfermedadesController::class, 'index'])->name('enfermedad');
            Route::get('add', [EnfermedadesController::class, 'add'])->name('enfermedad.add');
            Route::get('edit/{model}', [EnfermedadesController::class, 'edit'])->name('enfermedad.edit');
            Route::post('', [EnfermedadesController::class, 'store'])->name('enfermedad.store');
            Route::patch('{model}', [EnfermedadesController::class, 'update'])->name('enfermedad.update');
            Route::delete('{model}', [EnfermedadesController::class, 'destroy'])->name('enfermedad.delete');
        });

        Route::prefix('citas')->group(function () {
            Route::get('', [CitaController::class, 'index'])->name('cita');
            Route::get('add', [CitaController::class, 'add'])->name('cita.add');
            Route::get('edit/{model}', [CitaController::class, 'edit'])->name('cita.edit');
            Route::post('', [CitaController::class, 'store'])->name('cita.store');
            Route::patch('{model}', [CitaController::class, 'update'])->name('cita.update');
            Route::delete('{model}', [CitaController::class, 'destroy'])->name('cita.delete');
        });

      
        
        
    });
});


/*
Rutas para catalogos de la api
*/
Route::middleware('auth')->group(function(){
    Route::prefix('api-app')->group(function(){
       
        Route::get('sexos', [ApiAppsController::class, 'sexos']);
        Route::get('enfermedad', [ApiAppsController::class, 'enfermedad']);
        Route::get('citas', [ApiAppsController::class, 'citas']);
    });
});