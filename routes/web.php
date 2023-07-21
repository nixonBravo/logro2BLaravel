<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

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
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('app');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('vehiculos', [VehiculoController::class, 'index']);
    Route::post('vehiculo', [VehiculoController::class, 'store']);
    Route::delete('vehiculo-delete/{id}', [VehiculoController::class, 'delete']);
});

require __DIR__ . '/auth.php';

/* Route::get('vehiculos', [VehiculoController::class, 'index']);
Route::post('vehiculo', [VehiculoController::class, 'store']);
Route::delete('vehiculo-delete/{id}', [VehiculoController::class, 'delete']); */
