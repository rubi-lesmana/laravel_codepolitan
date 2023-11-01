<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KerjaanController;
use App\Http\Controllers\StudentControlle;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.app');
});
Route::get('/Home', [HomeController::class, 'index']);
Route::get('/Task', [TaskController::class, 'index']);
Route::get('/Tugas', [TugasController::class, 'index']);
Route::get('/Tugas/{id}', [TugasController::class, 'show']);
Route::patch('/Tugas/{id}', [TugasController::class, 'edit']);
Route::delete('Tugas/{id}', [TugasController::class, 'destroy']);
Route::post('/Kerjaan', [KerjaanController::class, 'store']);
Route::post('/Task', [TaskController::class, 'store']);
Route::post('/Tugas', [TugasController::class, 'store']);
Route::post('/Student',[StudentControlle::class, 'store']);
