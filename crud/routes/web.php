<?php

use App\Http\Controllers\ResultadosController;
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



Route::prefix('resultados')->group(function(){
Route:: get('/', [ResultadosController::class, 'index']) -> name ('resultados-index');
Route:: get('/create', [ResultadosController::class, 'create']) -> name ('resultados-create');
Route::post('/', [ResultadosController::class, 'store']) -> name ('resultados-store');
Route:: get('/{id}/edit', [ResultadosController::class, 'edit'])->where('id', '[0-9]+') -> name ('resultados-edit');
});

Route::fallback(function(){
  return "Error, route not find!";
});




