<?php

use App\Http\Controllers\EmpleadoController;
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
Route::get('/empleado/registrar',[EmpleadoController::class,'create'])->name('empleado.create');
Route::post('/empleado/guardar',[EmpleadoController::class,'store'])->name('empleado.store');
Route::delete('/empleado/borrar/{empleado}',[EmpleadoController::class,'delete'])->name('empleado.delete');
Route::put('/empleado/edit/{empleado}',[EmpleadoController::class,'edit'])->name('empleado.edit');
Route::get('/empleado',[EmpleadoController::class,'index'])->name('empleado.index');