<?php

namespace App\Http\Controllers\Api\StudentController;

use App\Class\ApiResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use App\Services\Students\StudentService;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index()
    {
        $data = $this->studentService->getAllStudents();
        return ApiResponseHelper::sendResponse(StudentResource::collection($data), '', 200);
    }

    public function show(string $id)
    {
        $student = $this->studentService->getStudentById($id);
        return ApiResponseHelper::sendResponse(new StudentResource($student), '', 200);
    }

    public function store(StoreStudentRequest $request)
    {
        $data = [
            'name' => $request->name,
            'age' => $request->age,
        ];
        $response = $this->studentService->createStudent($data);
        return $response['success']
            ? ApiResponseHelper::sendResponse(new StudentResource($response['data']), $response['message'], 201)
            : ApiResponseHelper::rollback($response['message']);
    }

    public function update(UpdateStudentRequest $request, string $id)
    {
        $data = [
            'name' => $request->name,
            'age' => $request->age,
        ];
        $response = $this->studentService->updateStudent($data, $id);
        // return $response["message"];
        return $response['success']
            ? ApiResponseHelper::sendResponse(new StudentResource($response['data']), $response['message'], 200)
            : ApiResponseHelper::rollback(null, $response["message"]);
    }

    public function destroy($id)
    {
        $response = $this->studentService->deleteStudent($id);
        
        return $response['success']
            ? ApiResponseHelper::sendResponse(null, $response['message'], 200)
            : ApiResponseHelper::rollback(null, $response['message']);
    }
}
