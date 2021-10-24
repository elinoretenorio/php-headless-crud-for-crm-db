<?php

declare(strict_types=1);

namespace CRM\ContactStatus;

interface IContactStatusRepository
{
    public function insert(ContactStatusDto $dto): int;

    public function update(ContactStatusDto $dto): int;

    public function get(int $id): ?ContactStatusDto;

    public function getAll(): array;

    public function delete(int $id): int;
}