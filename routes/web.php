<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegisterController;
use App\Models\Namo;


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
Route::get('/register',[RegisterController::class,'index'])->name('register.load');
Route::post('/register',[RegisterController::class,'register']);
Route::get('/view', [RegisterController::class,'view']);
Route::get('/delete/{id}',[RegisterController::class,'delete'])->name('register.create');
Route::get('/edit/{id}',[RegisterController::class,'edit'])->name('register.create');
Route::post('/update/{id}',[RegisterController::class,'update'])->name('register.create');

