<?php

declare(strict_types=1);

namespace CRM\Notes;

interface INotesService
{
    public function insert(NotesModel $model): int;

    public function update(NotesModel $model): int;

    public function get(int $id): ?NotesModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?NotesModel;
}