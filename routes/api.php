<?php


use App\Http\Controllers\Api\StudentController\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
// Route::get('/students', [StudentController::class, 'index'])->name('index.students');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('show.students');
Route::post('/students', [StudentController::class, 'store'])->name('store.students');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('update.students');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('destroy.students');
Route::get('/students', [StudentController::class, 'index'])->name('index.students');
