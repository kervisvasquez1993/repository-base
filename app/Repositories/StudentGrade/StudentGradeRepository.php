<?php

namespace App\Repositories\StudentGrade;

use App\Interfaces\StudentGrade\StudenGradeRepositoryInterface;


class StudentGradeRepository implements StudenGradeRepositoryInterface
{
    public function getAllGrade() {}
    public function getByGrade($id) {}
    public function getByStudent($id) {}
    public function createGradeStudent(array $data, $student) {}

    public function updateGradeStudent($id, array $data) {}
    public function destroyGradeStudent($id) {}
}
