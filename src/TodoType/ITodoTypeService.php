<?php

declare(strict_types=1);

namespace CRM\TodoType;

interface ITodoTypeService
{
    public function insert(TodoTypeModel $model): int;

    public function update(TodoTypeModel $model): int;

    public function get(int $id): ?TodoTypeModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?TodoTypeModel;
}