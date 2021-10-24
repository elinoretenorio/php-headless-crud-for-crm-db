<?php

declare(strict_types=1);

namespace CRM\Roles;

interface IRolesRepository
{
    public function insert(RolesDto $dto): int;

    public function update(RolesDto $dto): int;

    public function get(int $id): ?RolesDto;

    public function getAll(): array;

    public function delete(int $id): int;
}