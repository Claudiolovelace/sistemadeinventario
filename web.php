<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Models\Equipo;

Route::get('/prueba', function () {

    $equipo = Equipo::first();

    dd($equipo);

});
use App\Http\Controllers\EquipoController;

Route::resource('equipos', EquipoController::class);
Route::get('/', function () {

    return view('dashboard');

});