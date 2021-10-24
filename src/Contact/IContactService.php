<?php

declare(strict_types=1);

namespace CRM\Contact;

interface IContactService
{
    public function insert(ContactModel $model): int;

    public function update(ContactModel $model): int;

    public function get(int $id): ?ContactModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?ContactModel;
}