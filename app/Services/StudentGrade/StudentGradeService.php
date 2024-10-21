<?php

namespace App\Services\StudentGrade;

use App\Interfaces\StudentGrade\StudenGradeRepositoryInterface;

class StudentGradeService
{
    protected StudenGradeRepositoryInterface $studenGradetRepository;

    public function __construct(StudenGradeRepositoryInterface $studenGradetRepository)
    {
        $this->studenGradetRepository = $studenGradetRepository;
    }
}
