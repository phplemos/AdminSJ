<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ItemController;
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

/* Rotas Necessarias para autenticação

*/
Route::middleware(['auth'])->group(function () {
    Route::get('/', function(){return view('pages.dashboard');})->name('dashboard');
    Route::resource('inventario', InventarioController::class)->name('get','inventario');
    Route::resource('item', ItemController::class)->name('get','item');
});
require __DIR__ . '/auth.php';
