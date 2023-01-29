<?php

namespace App\Repositories;

use App\Contracts\ProjectInterface;
use App\Services\ProjectService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ProjectRepository implements ProjectInterface
{

    private ProjectService $projectService;

    public function __construct()
    {
        $this->projectService = new ProjectService();
    }

    /**
     * @param $request
     * @return string
     */
    public function createProject($request): string
    {
        return $this->projectService->createProject($request);
    }

    /**
     * @param $request
     * @return string
     */
    public function editProject($request): string
    {
        return $this->projectService->editProject($request);
    }

    public function deleteProject($request)
    {
        return $this->projectService->deleteProject($request);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function getAProject($request): mixed
    {
        return $this->projectService->getAProject($request);
    }

    /**
     * @param $request
     * @return LengthAwarePaginator
     */
    public function getAllProjects($request): LengthAwarePaginator
    {
        return $this->projectService->getAllProjects($request);
    }
}
