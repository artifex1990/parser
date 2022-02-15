<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkticomController;
  
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


Route::get('/', [AkticomController::class, 'fileImportExport'])->name('public');
Route::get('/output', [AkticomController::class, 'output'])->name('output');
Route::post('file-import', [AkticomController::class, 'fileImport'])->name('file-import');