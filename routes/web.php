<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\userController;

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
    return view('welcome');
});



Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[userController::class,'login']);


Route::view('register','register');

Route::post('register',[studentController::class,'show']);
//Route::view('register','regiser');


Route::get('student/create',[studentController::class,'create'])->name('student.create');
// Route::post('student/create',[studentController::class,'store'])->name('student.store');


Route::post('update',[studentController::class,'store'])->name('update');
Route::view('update','update');


route::view('schooldata', 'schooldata');

