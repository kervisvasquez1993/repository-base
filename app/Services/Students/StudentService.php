<?php

namespace App\Services\Students;

use App\Interfaces\Student\StudentRepositoryInterface;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log as FacadesLog;
use Log;

class StudentService
{
    protected StudentRepositoryInterface $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }
    public function findStudentOrFail($id)
    {
        $student = Student::find($id);
        if (!$student) {
            $message = "No query results for model Student {$id}";
            throw new \Exception($message);
        }

        return $student;
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
            return ['success' => false, 'message' => $ex->getMessage(), "e" => $ex];
        }
    }

    public function updateStudent(array $data, $id)
    {
        DB::beginTransaction();
        try {
            $student = $this->findStudentOrFail($id);
            $updatedStudent = $this->studentRepository->update($student, $data);
            DB::commit();
          
            return ['success' => true, "data" => $updatedStudent, 'message' => 'Record updated successfully'];
        } catch (\Exception $ex) {
            DB::rollBack();
            FacadesLog::info($ex->getMessage());
            return ['success' => false, 'message' => $ex->getMessage()];
        }
    }

    public function deleteStudent($id)
    {
        DB::beginTransaction();
        try {
            $student = $this->findStudentOrFail($id);
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
