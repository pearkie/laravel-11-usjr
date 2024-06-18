<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/students/all', [UniversityController::class, 'showAllStudents'])->name('show.all.students');

Route::get('/show/student/{id}', [UniversityController::class, 'showStudent'])->name('show.student');

Route::get('/show/colleges', [UniversityController::class, 'showColleges'])->name('show.colleges');

Route::get('/show/college/{id}', [UniversityController::class, 'showCollege'])->name('show.college');

Route::get('/show/departments', [UniversityController::class, 'showDepartments'])->name('show.departments');

?>