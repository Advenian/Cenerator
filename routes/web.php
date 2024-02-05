<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;

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
    return view('test');
});
Route::get('/1', function () {
    return view('certif1');
});
Route::get('/2', function () {
    return view('certif2');
});
Route::get('pdf1', [PDFController::class, 'downloadPDF'])->name('download-pdf');
Route::get('pdf2', [PDFController::class, 'downloadPDF2'])->name('download-pdf2');
Route::get('setting/{setting}', [SettingController::class, 'edit'])->name('setting.edit');
Route::get('setting', [SettingController::class, 'create'])->name('setting.create');
Route::patch('setting/{setting}/patch', [SettingController::class, 'update'])->name('setting.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
