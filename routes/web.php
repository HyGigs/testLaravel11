<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardStudentController;
use App\Http\Controllers\Admin\DashboardGradeController;
use App\Http\Controllers\Admin\DashboardDepartmentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/grades', [GradeController::class, 'index']);
Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard-students', [DashboardStudentController::class, 'index']);
Route::get('/dashboard-grades', [DashboardGradeController::class, 'index']);
Route::get('/dashboard-departments', [DashboardDepartmentController::class, 'index']);
Route::resource('dashboard-student', DashboardStudentController::class);
