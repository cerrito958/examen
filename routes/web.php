<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\NotaController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nota', [NotaController::class, 'index'])->name('nota.index');
Route::get('/nota/create', [NotaController::class, 'create'])->name('nota.create');
Route::post('nota/store', [NotaController::class, 'store'])->name('nota.store');
Route::get('nota/show/{nota}', [NotaController::class, 'show'])->name('nota.show');
Route::get('nota/edit/{nota}', [NotaController::class, 'edit'])->name('nota.edit');
Route::patch('nota/update/{nota}', [NotaController::class, 'update'])->name('nota.update');

Route::post('/comentario/{nota}/store', [ComentarioController::class, 'store'])->name(('comentario.store'));
