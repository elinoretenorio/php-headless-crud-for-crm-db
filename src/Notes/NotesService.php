<?php

declare(strict_types=1);

namespace CRM\Notes;

class NotesService implements INotesService
{
    private INotesRepository $repository;

    public function __construct(INotesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(NotesModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(NotesModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?NotesModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new NotesModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var NotesDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new NotesModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?NotesModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new NotesDto($row);

        return new NotesModel($dto);
    }
}