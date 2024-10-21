<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['subject', 'grade'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_grade');
    }
}
