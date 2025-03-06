<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Student Function using Model to Pass Data
    function getStudents(){
        $students = \App\Models\Student::all();
        $info = new \App\Models\Student;
        echo $info->testFunction();
        return view('students',['info'=>$students]);
    }
}
