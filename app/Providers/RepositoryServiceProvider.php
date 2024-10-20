<?php

namespace App\Providers;


use App\Interfaces\Student\StudentRepositoryInterface;
use App\Repositories\Student\StudentRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);

    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
