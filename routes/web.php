<?php

use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\SubjectsController;
use App\Models\Studentsubject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('app');
});



// Route::post('/departments', 'DepartmentsController@store')->name('departments.store');

Route::post('/departments', 'App\Http\Controllers\DepartmentsController@store')->name('departments.store');

Route::post('/subjects', 'App\Http\Controllers\SubjectsController@store')->name('subjects.store');//add subjects from the admin
// Route::resource('subjects', 'App\Http\Controllers\SubjectsController');

Route::post('/students', 'App\Http\Controllers\StudentsController@store')->name('students.store');
Route::post('/doctors', 'App\Http\Controllers\DoctorsController@store')->name('doctors.store');
Route::post('/studentsubjects', 'App\Http\Controllers\studentSubjects@store')->name('subject.store');//add subject from the student

// Route::post('/pdfs', 'App\Http\Controllers\PdfController@store')->name('pdfs.store');





//admin
Route::get('/admin-subjects', function () {
    return view('admin-subjects');
});

Route::get('/admin-department', function () {
    return view('admin-department');
});

Route::get('/admin-attendance', function () {
    return view('admin-attendance');
});
Route::get('/admin-department', [DepartmentsController::class,'index']);

Route::get('/admin-attendance', [SubjectsController::class,'index']);
Route::post('/doctor-attach-pdf', [PdfController::class, 'upload']);//upload pdf
Route::get('/student-subject-register', [Studentsubject::class,'index']);//for student subjects

Route::get('/admin-create-accounts', function () {
    return view('admin-create-accounts');
});
Route::get('/admin-home', function () {
    return view('admin-home');
});




//doctor

Route::get('/doctor-attendance', function () {
    return view('doctor-attendance');
});

Route::get('/doctor-attach-pdf', function () {
    return view('doctor-attach-pdf');
});
Route::get('/doctor-home', function () {
    return view('doctor-home');
});



//student

Route::get('/student-subject-register', function () {
    return view('student-subject-register');
});
Route::get('/student-home', function () {
    return view('student-home');
});
Route::get('/student-pdf', function () {
    return view('student-pdf');
});

Auth::routes();

// Route::get('/home', redirect('/admin-home'))->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
