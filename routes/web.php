<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');


Route::get('tuotteet', [IndexController::class, 'index'])->name('tuotteet');
Route::get('ruokintalaskuri', [IndexController::class, 'index'])->name('ruokintalaskuri');
Route::get('ruokintavinkit', [IndexController::class, 'index'])->name('ruokintavinkit');
Route::get('yhteystiedot', [IndexController::class, 'index'])->name('yhteystiedot');
Route::get('yritys', [IndexController::class, 'index'])->name('yritys');



require __DIR__.'/auth.php';
