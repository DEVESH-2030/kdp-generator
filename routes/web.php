<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KdpController;

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


Route::get('/download-pdf', [KdpController::class, 'downloadPDF'])->name('download-pdf');
Route::get('/stream-pdf', [KdpController::class, 'streamPDF'])->name('stream-pdf');
Route::post('/convert-pdf', [KdpController::class, 'convertPDF'])->name('convert-pdf');
Route::get('/preview-book', [KdpController::class, 'previewBook'])->name('preview-book');

// Route::post('/save-image', [KdpController::class, 'saveImage'])->name('save-image');

Route::get('/', function () {
    return view('index');
});
