<?php

declare(strict_types=1);

namespace CRM\UserStatus;

interface IUserStatusService
{
    public function insert(UserStatusModel $model): int;

    public function update(UserStatusModel $model): int;

    public function get(int $id): ?UserStatusModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?UserStatusModel;
}