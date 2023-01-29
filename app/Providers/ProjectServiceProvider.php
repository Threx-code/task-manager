<?php

namespace App\Providers;

use App\Contracts\ProjectInterface;
use App\Repositories\ProjectRepository;
use Illuminate\Support\ServiceProvider;

class ProjectServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProjectInterface::class, ProjectRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
