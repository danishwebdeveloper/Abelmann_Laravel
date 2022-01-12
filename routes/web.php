<?php

use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\CompanyRecordController;
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

// For image upload
Route::get('/', [UploadImageController::class, 'index']);
Route::post('/uploadFile', [UploadImageController::class, 'uploadFile'])->name('uploadFile');

// Resource Controller of Record
Route::resource('/record', CompanyRecordController::class);


