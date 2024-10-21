<?php

namespace App\Repositories\StudentGrade;

use App\Interfaces\StudentGrade\StudenGradeRepositoryInterface;
use App\Models\Student;

class StudentGradeRepository implements StudenGradeRepositoryInterface
{
    public function getAllGrade() {}
    public function getByGrade($id) {}
    public function getByStudent($id) {}
    public function createGradeStudent(Student $student, array $data,) {}

    public function updateGradeStudent($id, array $data) {}
    public function destroyGradeStudent($id) {}
}
