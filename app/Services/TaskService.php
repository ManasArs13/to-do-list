<?php

namespace App\Services;

use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;

class TaskService
{
    /**
     * Get all tasks
     */
    public function getAllTasks(): Collection
    {
        return Task::paginate(15);
    }

    /**
     * Get task by ID
     */
    public function getTaskById(int $id): Task
    {
        $task = Task::find($id);

        if (!$task) {
            throw new ModelNotFoundException('Task not found');
        }

        return $task;
    }

    /**
     * Create a new task
     */
    public function createTask(array $data): Task
    {
        return Task::create($data);
    }

    /**
     * Update an existing task
     */
    public function updateTask(int $id, array $data): Task
    {
        $task = $this->getTaskById($id);
        $task->update($data);

        return $task->fresh();
    }

    /**
     * Delete a task
     */
    public function deleteTask(int $id): void
    {
        $task = $this->getTaskById($id);
        $task->delete();
    }
}
