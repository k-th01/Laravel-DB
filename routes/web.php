<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

// --> WELCOME PAGE <-- //

Route::get('/', function () {
    return view('welcome');
});


// --> USERS <-- //

Route::get('users', [UserController::class, 'users']);


// --> STUDENTS <-- //

Route::get('students', [StudentController::class, 'getStudents']);


// --> HTTP CLIENT <-- //

Route::get('client', [UserController::class, 'getInfo']);