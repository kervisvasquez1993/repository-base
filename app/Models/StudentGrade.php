<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    protected $table = 'student_grade';

    protected $fillable = ['student_id', 'grade_id'];

}
