<?php

declare(strict_types=1);

namespace CRM\ContactStatus;

interface IContactStatusService
{
    public function insert(ContactStatusModel $model): int;

    public function update(ContactStatusModel $model): int;

    public function get(int $id): ?ContactStatusModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?ContactStatusModel;
}