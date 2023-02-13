<?php

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

Route::get('/',[App\Http\Controllers\Home\HomeController::class,'index'])->name('home.list');
Route::get('/add-contact',[App\Http\Controllers\Home\HomeController::class,'formContact'])->name('form.contact.get');
Route::post('/post-contact',[App\Http\Controllers\Home\HomeController::class,'create'])->name('form.contact.post');
Route::get('/edit-contact/{id}',[App\Http\Controllers\Home\HomeController::class,'edit'])->name('form.contact.edit.form');
Route::put('/edit-contact/{id}',[App\Http\Controllers\Home\HomeController::class,'update'])->name('form.contact.edit');
Route::get('/delete-contact/{id}',[App\Http\Controllers\Home\HomeController::class,'destroy'])->name('form.contact.delete');
/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';
