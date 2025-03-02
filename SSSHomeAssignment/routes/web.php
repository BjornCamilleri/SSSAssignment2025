<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;
use App\Models\College;


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

//Colleges

//List all colleges
Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index');

//Add new college
Route::get('/colleges/create', [CollegeController::class, 'create'])->name('colleges.create');
Route::post('/colleges', [CollegeController::class, 'store'])->name('colleges.store');

//Form to update a college`s details
Route::get('/colleges/{id}/edit', [CollegeController::class, 'edit'])->name('colleges.edit');
Route::post('/colleges/{id}', [CollegeController::class, 'editstorage'])->name('colleges.editstorage');

//View a college
Route::get('/colleges/{id}/view', [CollegeController::class, 'view'])->name('colleges.view');

//Delete a college
Route::get('/colleges/{id}', [CollegeController::class, 'destroy'])->name('colleges.destroy');


//Students

//List all students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

//Add new student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

//Form to update a student`s details
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::post('/students/{id}', [StudentController::class, 'editstorage'])->name('students.editstorage');

//Delete a student
Route::get('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

//View a student
Route::get('/students/{id}/view', [StudentController::class, 'view'])->name('students.view');


