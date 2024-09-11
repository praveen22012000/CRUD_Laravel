<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class,'create']);
Route::post('/store',[StudentController::class,'store']);
Route::get('list',[StudentController::class,'list']);
Route::get('edit/{id}',[StudentController::class,'edit']);
Route::post('update/{id}',[StudentController::class,'update']);
Route::get('delete/{id}',[StudentController::class,'delete']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
