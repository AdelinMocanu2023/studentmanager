<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;

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

Route::get('/', [StudentController::class, 'index']);
Route::get('/students/{student}', [StudentController::class, 'show']);


Route::get('/create-form', [StudentController::class, 'create']);
Route::post('/create', [StudentController::class, 'store']);


Route::get('/edit-form/{student}', [StudentController::class, 'edit']);
Route::put('/update/{student}', [StudentController::class, 'update']);

Route::delete('/delete/{student}', [StudentController::class, 'destroy']);
