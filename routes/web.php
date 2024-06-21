<?php

use App\Http\Middleware\EnsureIsAdmin;
use App\Livewire\CourseForm;
use App\Livewire\Courses;
use Illuminate\Support\Facades\Route;


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
    Route::get('/courses', [Courses::class, 'render'])->name('courses');
    Route::get('/course-form' , [CourseForm::class, 'render'])->name('course-form')->middleware(EnsureIsAdmin::class);
    Route::post('/create-course' , [Courses::class, 'createCourse'])->name('createCourse')->middleware(EnsureIsAdmin::class);
});
