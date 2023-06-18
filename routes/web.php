<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\DashboardController;
use App\Models\Dashboard;

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

Route::controller(CarController::class)->group(
    function () {
        Route::get('/', 'index')->name('car.index');
        Route::get('/create', 'create');
        Route::get('/edit/{id}', 'edit');
        Route::get('delete/{id}', 'deleteData');
        Route::put('/update/{id}', [CarController::class, 'update'])->name('car.update');
        Route::post('/store', 'store');
    }
);

Route::controller(LoanController::class)->group(
    function () {
        Route::get('/loan', 'dataPeminjaman')->name('peminjaman.index');
        Route::get('/loan/buatPeminjaman', 'buatPeminjaman')->name('peminjaman.buat');;
        Route::get('/loan/tambahData', 'tambahData')->name('peminjaman.create');
        Route::post('/loan/store', 'store');
        Route::get('/loan/edit/{id}', 'edit')->name('peminjaman.edit');
        Route::put('/loan/update/{id}', [LoanController::class, 'update'])->name('peminjaman.update');
        Route::get('/loan/delete/{id}', 'deleteData');
    }
);
Route::controller(DashboardController::class)->group(
    function (){
        Route::get('/dashboard', 'index')->name('dashboard.index');
    }
);

// Route::get('/loan', [LoanController::class, 'dataPeminjaman'])->name('peminjaman.index');
// Route::get('/loan/buatPeminjaman', [LoanController::class, 'buatPeminjaman'])->name('peminjaman.buat');
// Route::get('/loan/tambahData', [LoanController::class, 'tambahData'])->name('peminjaman.create');
// Route::post('/loan/storeLoan',[LoanController::class, 'storeLoan']);