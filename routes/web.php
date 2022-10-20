<?php

use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ItemController;
use App\Models\Inventario;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function(){        
    Route::resource('inventario', InventarioController::class)->parameters([
        'inventario' => 'fk_setor'
    ]);
    Route::resource('cadastro/item',ItemController::class);
});

require __DIR__.'/auth.php';
