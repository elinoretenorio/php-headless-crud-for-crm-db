<?php

declare(strict_types=1);

namespace CRM\Roles;

interface IRolesService
{
    public function insert(RolesModel $model): int;

    public function update(RolesModel $model): int;

    public function get(int $id): ?RolesModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?RolesModel;
}