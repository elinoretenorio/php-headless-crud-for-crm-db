<?php

declare(strict_types=1);

namespace CRM\Users;

class UsersService implements IUsersService
{
    private IUsersRepository $repository;

    public function __construct(IUsersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(UsersModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(UsersModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?UsersModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new UsersModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var UsersDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new UsersModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?UsersModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new UsersDto($row);

        return new UsersModel($dto);
    }
}