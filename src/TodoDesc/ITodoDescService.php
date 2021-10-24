<?php

declare(strict_types=1);

namespace CRM\TodoDesc;

interface ITodoDescService
{
    public function insert(TodoDescModel $model): int;

    public function update(TodoDescModel $model): int;

    public function get(int $id): ?TodoDescModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?TodoDescModel;
}