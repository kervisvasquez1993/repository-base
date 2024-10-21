<?php

namespace App\Repositories\Student;

use App\Interfaces\Student\StudentRepositoryInterface;
use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    public function getAll()
    {
        return Student::all();
    }

    public function getById($id)
    {
        return Student::findOrFail($id);
    }

    public function store(array $data)
    {
        return Student::create($data);
    }

    public function update(Student $student, array $data)
    {
       
        $student->update($data);
        return $student; 
    }

    public function delete($id)
    {
        return Student::destroy($id);
    }
}
