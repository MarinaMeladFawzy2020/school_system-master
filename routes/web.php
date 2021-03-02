<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController ;
use App\Http\Controllers\loginController ;
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
    // return Auth::user();
    return view('welcome');
});

// Route::get('/student', function () {
//     return view('student');
// });

Route::get('/login', [loginController::class , 'index'])->name('login.index');
Route::post('/login', [loginController::class , 'loginsubmit'])->name('login.submit');

Route::resource('students', 'App\Http\Controllers\StudentController');

// Route::get('/student', [StudentController::class , 'index'])->name('student.index');
