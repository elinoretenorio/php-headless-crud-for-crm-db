<?php

declare(strict_types=1);

namespace CRM\Contact;

interface IContactRepository
{
    public function insert(ContactDto $dto): int;

    public function update(ContactDto $dto): int;

    public function get(int $id): ?ContactDto;

    public function getAll(): array;

    public function delete(int $id): int;
}