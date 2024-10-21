<?php

namespace App\Providers;


use App\Interfaces\Student\StudentRepositoryInterface;
use App\Interfaces\StudentGrade\StudenGradeRepositoryInterface;
use App\Repositories\Student\StudentRepository;
use App\Repositories\StudentGrade\StudentGradeRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
        $this->app->bind(StudenGradeRepositoryInterface::class, StudentGradeRepository::class);
    }
    /*
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
