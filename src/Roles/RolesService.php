<?php

declare(strict_types=1);

namespace CRM\Roles;

class RolesService implements IRolesService
{
    private IRolesRepository $repository;

    public function __construct(IRolesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(RolesModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(RolesModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?RolesModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new RolesModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var RolesDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new RolesModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?RolesModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new RolesDto($row);

        return new RolesModel($dto);
    }
}