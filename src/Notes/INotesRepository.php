<?php

declare(strict_types=1);

namespace CRM\Notes;

interface INotesRepository
{
    public function insert(NotesDto $dto): int;

    public function update(NotesDto $dto): int;

    public function get(int $id): ?NotesDto;

    public function getAll(): array;

    public function delete(int $id): int;
}