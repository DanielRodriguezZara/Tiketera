<?php

use App\Livewire\Home\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\SolicitudesComponent;
use App\Livewire\AltaUsuariosComponent;
use App\Livewire\ImportUsuariosComponent;

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

Route::get('/solicitudes', SolicitudesComponent::class)->middleware('auth')->name('solicitudes');
Route::get('/alta-usuarios', AltaUsuariosComponent::class)->middleware('auth')->name('alta-usuarios');
Route::get('/import-usuarios', ImportUsuariosComponent::class)->middleware('auth')->name('import-usuarios');
