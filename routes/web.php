<?php

use App\Livewire\SolicitudForm;
use App\Livewire\Home\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\SolicitudesComponent;
use App\Livewire\AltaUsuariosComponent;

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
    return redirect(route('login'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});

Route::get('/solicitudes', SolicitudesComponent::class)->name('solicitudes');
Route::get('/alta-usuarios', AltaUsuariosComponent::class)->name('alta-usuarios');
Route::get('/solicitud/formulario/{user}', SolicitudForm::class)->name('solicitud-form');
