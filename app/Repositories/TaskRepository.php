<?php

namespace App\Repositories;

use App\Contracts\TaskInterface;
use App\Services\TaskService;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class TaskRepository implements TaskInterface
{
    private TaskService $taskService;

    public function __construct()
    {
       $this->taskService = new TaskService();
    }

    /**
     * @param $request
     * @return mixed|string
     * @throws Exception
     */
    public function createTask($request): mixed
    {
        return $this->taskService->createTask($request);
    }

    /**
     * @param $request
     * @return string
     * @throws Exception
     */
    public function editTask($request): string
    {
        return $this->taskService->editTask($request);
    }

    /**
     * @param $request
     * @return string
     */
    public function deleteTask($request): string
    {
        return $this->taskService->deleteTask($request);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function getATask($request): mixed
    {
        return $this->taskService->getATask($request);
    }

    /**
     * @param $request
     * @return LengthAwarePaginator
     */
    public function getAllTasks($request): LengthAwarePaginator
    {
        return $this->taskService->getAllTasks($request);
    }

    public function getAProjectTasks($request)
    {
        return $this->taskService->getAProjectTasks($request);
    }
}
