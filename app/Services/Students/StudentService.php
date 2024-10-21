<?php

namespace App\Services\Students;

use App\Interfaces\Student\StudentRepositoryInterface;
use Illuminate\Support\Facades\DB;

class StudentService
{
    protected StudentRepositoryInterface $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function createStudent(array $data)
    {
        DB::beginTransaction();
        try {
            $student = $this->studentRepository->store($data);
            DB::commit();
            return ['success' => true, 'data' => $student, 'message' => 'Record created successfully'];
        } catch (\Exception $ex) {
            DB::rollBack();
            return ['success' => false, 'message' => $ex->getMessage()];
        }
    }

    public function updateStudent(array $data, $id)
    {
        DB::beginTransaction();
        try {
            $this->studentRepository->update($data, $id);
            DB::commit();
            return ['success' => true, 'message' => 'Record updated successfully'];
        } catch (\Exception $ex) {
            DB::rollBack();
            return ['success' => false, 'message' => $ex->getMessage()];
        }
    }

    public function deleteStudent($id)
    {
        DB::beginTransaction();
        try {
            $this->studentRepository->delete($id);
            DB::commit();
            return ['success' => true, 'message' => 'Record deleted successfully'];
        } catch (\Exception $ex) {
            DB::rollBack();
            return ['success' => false, 'message' => $ex->getMessage()];
        }
    }

    public function getAllStudents()
    {
        return $this->studentRepository->getAll();
    }

    public function getStudentById($id)
    {
        return $this->studentRepository->getById($id);
    }
}
