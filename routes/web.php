<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HotelesController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\CambioController;
use App\Http\Controllers\TelevisionesController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\PerfilController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/mxl_tv', [App\Http\Controllers\TelevisionesController::class, 'mxl'])->name('mxl');
Route::get('/calafia_tv', [App\Http\Controllers\TelevisionesController::class, 'calafia'])->name('calafia');
Route::get('/hmo_tv', [App\Http\Controllers\TelevisionesController::class, 'hmo'])->name('hmo');
Route::get('/lapaz_tv', [App\Http\Controllers\TelevisionesController::class, 'lapaz'])->name('lapaz');
Route::get('/slrc_tv', [App\Http\Controllers\TelevisionesController::class, 'sanluis'])->name('sanluis');
// MXL y CALAFIA y hermosillo TIEMPO
Route::get('/current-time', [TimeController::class, 'getCurrentTime'])->name('getCurrentTime');



Route::controller(AuthController::class)->group(function(){

    Route::get('login', 'login')->name('login');
    Route::post('login','loginAction')->name('login.action');

    Route::get('logout' ,'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function() {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('perfil', function () {
        return view('perfil');
    })->name('perfil');

    Route::controller(HotelesController::class)->prefix('hotel')->group(function(){
        Route::get('', 'index')->name('hoteles');
        Route::get('create', 'create')->name('hoteles.create');
        Route::post('store','store')->name('hoteles.store');
        Route::put('edit/{id}','update')->name('hoteles.update');
    });

    Route::controller(TiposController::class)->prefix('tipo')->group(function(){
        Route::get('', 'index')->name('tipos');
        Route::get('create','create')->name('tipos.create');
        Route::post('store','store')->name('tipos.store');
        Route::put('edit/{id}','update')->name('tipos.update');
    });

    Route::controller(PerfilController::class)->prefix('perfil')->group(function(){
        Route::put('edit/{id}','updatePerfil')->name('perfil.update');
        Route::put('editcontra/{id}','updateContra')->name('contra.update');
    });

    Route::controller(HabitacionesController::class)->prefix('habitacion')->group(function(){ 
        Route::get('', 'index')->name('nueva.habitacion');
        Route::get('create','create')->name('habitacion.create');
        Route::post('store','store')->name('habitaciones.store');

        Route::get('mxl','mexicali')->name('habitaciones.mxl');
        Route::get('cal','calafia')->name('habitaciones.calafia');
        Route::get('hmo','hermosillo')->name('habitaciones.hermosillo');
        Route::get('paz','lapaz')->name('habitaciones.paz');
        Route::get('slrc','slrc')->name('habitaciones.sanluis');

        Route::put('edit/{id}','update')->name('habitaciones.update');

        Route::get('bajas','bajas')->name('bajas');

        Route::put('vida/{id}','vida')->name('habitacion.vida');

        Route::put('baja/{id}','baja_habitacion')->name('habitacion.baja');

        Route::post('/items/update-order','updateOrden')->name('items.updateOrder');
    });

    Route::controller(CambioController::class)->prefix('cambio')->group(function(){
        Route::get('', 'index')->name('cambio');
        Route::put('edit/{id}','update')->name('cambio.update');
    });


    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

