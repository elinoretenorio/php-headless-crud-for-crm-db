<?php

declare(strict_types=1);

namespace CRM\TaskStatus;

interface ITaskStatusService
{
    public function insert(TaskStatusModel $model): int;

    public function update(TaskStatusModel $model): int;

    public function get(int $id): ?TaskStatusModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?TaskStatusModel;
}