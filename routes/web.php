<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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
    return view('home');
});

// Route::get('/crud', function () {
//     return view('crud.index');
// });

Route::prefix('crud')->group(function () {
    Route::get('/', [CrudController::class, 'index'])->name('crud.index');
    Route::post('/store', [CrudController::class, 'store'])->name('crud.store');
    Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('crud.edit');
    Route::post('/update/{id}', [CrudController::class, 'update'])->name('crud.update');
    Route::post('/delete/{id}', [CrudController::class, 'softDelete'])->name('crud.delete');
});