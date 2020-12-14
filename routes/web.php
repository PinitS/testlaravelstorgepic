<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImgPathController;

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
    return view('upload');
});

Route::get('/view', function () {
    return view('veiw');
});

Route::get('/veiwExport', function () {
    return view('export');
});

Route::post('upload', [ImgPathController::class, 'upload']);
Route::post('uploadAjax', [ImgPathController::class, 'uploadAjax']);

Route::get('viewImg', [ImgPathController::class, 'viewImg']);

Route::post('exportFilterExcel/{id}', [ImgPathController::class, 'exportFilterExcel']);
Route::get('exportAllExcel', [ImgPathController::class, 'exportAllExcel']);



