<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Expedientes\ExpedientesComponent;
use App\Http\Livewire\Usuarios\UsuariosComponent;
use App\Http\Livewire\Reportes\Charcomponent;

//use App\Http\Livewire\ExpedientesComponent;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*
Route::get('expedientes',ExpedientesComponent::class)->name('expedientes');
Route::get('usuarios',UsuariosComponent::class)->name('usuarios');
Route::get('reportes',Charcomponent::class)->name('reportes');

Route::resource('expedientes', 'ExpedientesComponent');

Route::get('expedientes', function () {
    return view('expedientes-component');
});


Route::get('reportes', function () {
    return view('charcomponent');
});
*/

Route::get('/expedientes', ExpedientesComponent::class);
Route::get('/usuarios', UsuariosComponent::class);
Route::get('/reportes', Charcomponent::class);

Route::post('consultarResponsable','ExpedientesComponent@obtenerDatosResponsable');
