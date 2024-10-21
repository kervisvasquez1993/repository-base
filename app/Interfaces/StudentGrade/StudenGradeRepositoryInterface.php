<?php

namespace App\Interfaces\StudentGrade;

use App\Models\Student;

interface StudenGradeRepositoryInterface
{
    public function getAllGrade();
    public function getByGrade($id);
    public function getByStudent($id);
    public function createGradeStudent(array $data,Student $student);

    public function updateGradeStudent($id,array $data);
    public function destroyGradeStudent($id);
    


}
