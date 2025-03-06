<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    use HasFactory;
    protected $table = 'cvsu_students';

    // StudentController to Display the Pass Data
    function testFunction(){
        return "View the student list by batch below.";
    }
}
