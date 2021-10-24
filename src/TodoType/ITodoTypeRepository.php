<?php

declare(strict_types=1);

namespace CRM\TodoType;

interface ITodoTypeRepository
{
    public function insert(TodoTypeDto $dto): int;

    public function update(TodoTypeDto $dto): int;

    public function get(int $id): ?TodoTypeDto;

    public function getAll(): array;

    public function delete(int $id): int;
}