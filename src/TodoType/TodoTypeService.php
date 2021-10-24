<?php

declare(strict_types=1);

namespace CRM\TodoType;

class TodoTypeService implements ITodoTypeService
{
    private ITodoTypeRepository $repository;

    public function __construct(ITodoTypeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(TodoTypeModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(TodoTypeModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?TodoTypeModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new TodoTypeModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var TodoTypeDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new TodoTypeModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?TodoTypeModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new TodoTypeDto($row);

        return new TodoTypeModel($dto);
    }
}