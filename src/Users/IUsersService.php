<?php

declare(strict_types=1);

namespace CRM\Users;

interface IUsersService
{
    public function insert(UsersModel $model): int;

    public function update(UsersModel $model): int;

    public function get(int $id): ?UsersModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?UsersModel;
}