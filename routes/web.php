<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class,'index'])->name('home');
Route::get('/create-student', [StudentController::class,'create'])->name('create-student');
Route::post('/save-student', [StudentController::class,'saveStudent'])->name('save-student');
Route::get('/edit-student/{id}', [StudentController::class,'edit'])->name('edit.student');
Route::get('/detail-student/{id}', [StudentController::class,'detail'])->name('detail.student');
Route::post('/update-student/{id}', [StudentController::class,'update'])->name('update-student');
Route::get('/delete-student/{id}', [StudentController::class,'delete'])->name('delete.student');
