<?php

use App\Livewire\Courses;
use App\Livewire\CourseForm;
use App\Livewire\CourseInfo;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureIsAdmin;
use App\Livewire\Students;
use App\Livewire\Teachers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/students', [Students::class, 'render'])->name('students');
    Route::get('/teachers', [Teachers::class, 'render'])->name('teachers');
    Route::get('/courses', [Courses::class, 'render'])->name('courses');
    Route::get('/course/{id}', [CourseInfo::class, 'render']);
    Route::get('/course-form' , [CourseForm::class, 'render'])->name('course-form')->middleware(EnsureIsAdmin::class);
    Route::post('/create-course' , [Courses::class, 'createCourse'])->name('createCourse')->middleware(EnsureIsAdmin::class);
    Route::get('/delete-course/{id}' , [Courses::class, 'deleteCourse'])->name('deleteCourse')->middleware(EnsureIsAdmin::class);
});
