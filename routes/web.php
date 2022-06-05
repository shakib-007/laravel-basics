<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
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

Route::get('/', function () {
    return view('home');
});


Route::view('contact','contact');
Route::view('about','about');

Route::get('customers', [CustomersController::class, 'list']);

Route::get('students', [StudentController::class, 'studentList']);
Route::get('add', [StudentController::class, 'add']);
Route::post('/student/store', [StudentController::class, 'store']);
Route::get('show', [StudentController::class, 'show']);

Route::get('student/edit/{id}',[StudentController::class, 'edit']);
Route::post('student/update/{id}',[StudentController::class, 'update']);

Route::get('student/delete/{id}',[StudentController::class, 'delete']);