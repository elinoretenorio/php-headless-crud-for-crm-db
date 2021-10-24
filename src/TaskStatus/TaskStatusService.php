<?php

declare(strict_types=1);

namespace CRM\TaskStatus;

class TaskStatusService implements ITaskStatusService
{
    private ITaskStatusRepository $repository;

    public function __construct(ITaskStatusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(TaskStatusModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(TaskStatusModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?TaskStatusModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new TaskStatusModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var TaskStatusDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new TaskStatusModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?TaskStatusModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new TaskStatusDto($row);

        return new TaskStatusModel($dto);
    }
}