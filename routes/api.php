<?php


use App\Http\Controllers\Api\StudentController\StudentController;
use App\Http\Controllers\Api\StudentGradeController\StudentGradeController;
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

Route::get('/grade-students', [StudentGradeController::class, 'index'])->name('grade-students.students');
Route::get('/grade-students/{id}/student', [StudentGradeController::class, 'showStudent'])->name('grade-students.students');
Route::get('/grade-students/{id}/grade', [StudentGradeController::class, 'showGrade'])->name('grade-students.students');
Route::post('/grade-students', [StudentGradeController::class, 'store'])->name('grade-students.students');
Route::put('/grade-students/{id}', [StudentGradeController::class, 'update'])->name('grade-students.students');
Route::delete('/grade-students/{id}', [StudentGradeController::class, 'destroy'])->name('grade-students.students');
