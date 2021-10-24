<?php

declare(strict_types=1);

namespace CRM\UserStatus;

interface IUserStatusRepository
{
    public function insert(UserStatusDto $dto): int;

    public function update(UserStatusDto $dto): int;

    public function get(int $id): ?UserStatusDto;

    public function getAll(): array;

    public function delete(int $id): int;
}