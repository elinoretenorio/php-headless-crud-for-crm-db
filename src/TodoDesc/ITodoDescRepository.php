<?php

declare(strict_types=1);

namespace CRM\TodoDesc;

interface ITodoDescRepository
{
    public function insert(TodoDescDto $dto): int;

    public function update(TodoDescDto $dto): int;

    public function get(int $id): ?TodoDescDto;

    public function getAll(): array;

    public function delete(int $id): int;
}