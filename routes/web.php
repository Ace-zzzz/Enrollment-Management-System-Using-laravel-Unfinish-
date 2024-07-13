<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('students.home');
});

Route::get('/home', [StudentController::class,'home'])->name('Home');

Route::post('admin/logout', [StudentController::class, 'adminlogout'])->name('Adminlogout');

Route::get('/register', [StudentController::class,'register'])->name('register');
Route::get('/login',    [StudentController::class,'login'])->name('Login');
Route::post('/login/confirm', [StudentController::class,'loginConfirm'])->name('LoginConfirm');
Route::post('/adminLogin/confirm', [StudentController::class, 'adminLoginConfirm'])->name('AdminLoginConfirm');
Route::post('/logout', [StudentController::class, 'logout'])->name('logout');
Route::get('/studentDashboard', [StudentController::class, 'studDashboard']) -> name('StudentDashboard');

Route::get('/adminLogin', [StudentController::class,'adminLogin']) -> name('AdminLogin');

Route::get('/students',   [StudentController::class, 'index'])->name('Students');
Route::get('/allStudent', [StudentController::class, 'allStudent'])->name('AllStudent');
Route::get('/addStudent', [StudentController::class, 'addStudent'])->name('addStudent');
Route::post('/storeStudent', [StudentController::class, 'storeStudent'])->name('StoreStudent');
Route::post('/preRegister', [StudentController::class, 'preRegister'])->name('PreRegister');
Route::get('/login/{student}/edit', [StudentController::class, 'editStudent'])->name('EditStudent');
Route::put('/login/{student}/update', [StudentController::class, 'updateStudent'])->name('UpdateStudent');
Route::delete('/login/{student}/delete', [StudentController::class, 'deleteStudent'])->name('DeleteStudent');

Route::get('/newEnrollees', [StudentController::class, 'newEnrollee'])->name('NewEnrollee');
Route::put('/confirmEnrollees/{student}/', [StudentController::class, 'confirmEnrollees'])->name('confirmEnrollees');

Route::get('/subjects', [StudentController::class, 'subjects'])->name('Subjects');
Route::get('/viewProfile/{user}', [StudentController::class, 'viewProfile'])->name('ViewProfile');
Route::get('/viewSubject/{subject}', [StudentController::class, 'viewSubject'])->name('ViewSubject');



