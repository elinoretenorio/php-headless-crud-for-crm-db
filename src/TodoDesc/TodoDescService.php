<?php

declare(strict_types=1);

namespace CRM\TodoDesc;

class TodoDescService implements ITodoDescService
{
    private ITodoDescRepository $repository;

    public function __construct(ITodoDescRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(TodoDescModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(TodoDescModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?TodoDescModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new TodoDescModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var TodoDescDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new TodoDescModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?TodoDescModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new TodoDescDto($row);

        return new TodoDescModel($dto);
    }
}