<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Routes for CRUD operations

// Read all courses
Route::get('/course', [CourseController::class, 'index'])->name('course.index');
// Create a new course
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
// Store the new course
Route::post('/course', [CourseController::class, 'store'])->name('course.store');
// Route for editing a course
Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
// Route for updating a course
Route::put('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
// Route for showing a specific course
Route::get('course/{id}/show', [CourseController::class, 'show'])->name('course.show');
// Route for deleting a course
Route::delete('/course/{id}', [CourseController::class, 'destroy'])->name('course.destroy');

