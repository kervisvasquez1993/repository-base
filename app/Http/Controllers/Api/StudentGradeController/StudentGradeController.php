<?php

namespace App\Http\Controllers\Api\StudentGradeController;


use App\Http\Controllers\Controller;
use App\Services\StudentGrade\StudentGradeService;


class StudentGradeController extends Controller
{
    protected $studentGradeService;

    public function __construct(StudentGradeService $studentGradeService)
    {
        $this->studentGradeService = $studentGradeService;
    }
    public function index() {}
    public function showStudent() {}
    public function showGrade() {}
    public function store() {}
    public function update() {}
    public function destroy() {}
}
