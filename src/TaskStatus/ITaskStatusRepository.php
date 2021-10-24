<?php

declare(strict_types=1);

namespace CRM\TaskStatus;

interface ITaskStatusRepository
{
    public function insert(TaskStatusDto $dto): int;

    public function update(TaskStatusDto $dto): int;

    public function get(int $id): ?TaskStatusDto;

    public function getAll(): array;

    public function delete(int $id): int;
}