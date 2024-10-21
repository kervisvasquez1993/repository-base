<?php

namespace App\Interfaces\Student;
use App\Models\Student;

interface StudentRepositoryInterface
{
    public function getAll();
    public function getById($id);

    public function store(array $data);
    public function update(Student $student, array $data);
    public function delete($id);
}
