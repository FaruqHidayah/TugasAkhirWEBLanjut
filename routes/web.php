<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blog;
use App\Http\Controllers\Form;
use App\Http\Controllers\MahasiswaController;
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
    return view('welcome');
});

Route::get('/blog', [Blog::class, 'index']);

Route::get('/input', [Form::class, 'input']);

Route::post('/output', [Form::class, 'show']);
Route::get('/data-mhs', [MahasiswaController::class, 'index']);
Route::get('/tambah-data', [MahasiswaController::class, 'form']);
Route::post('/mhs/tambah', [MahasiswaController::class, 'tambah']);
Route::get('/mhs-edit/{nim}', [MahasiswaController::class, 'editForm']);
Route::get('/delete/{nim}', [MahasiswaController::class, 'destroy']);

Route::post('/update/{nim}', [MahasiswaController::class, 'update']);
Route::post('/add-data', [MahasiswaController::class, 'add']);