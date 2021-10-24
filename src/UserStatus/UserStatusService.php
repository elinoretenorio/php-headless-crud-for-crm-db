<?php

declare(strict_types=1);

namespace CRM\UserStatus;

class UserStatusService implements IUserStatusService
{
    private IUserStatusRepository $repository;

    public function __construct(IUserStatusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(UserStatusModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(UserStatusModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?UserStatusModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new UserStatusModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var UserStatusDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new UserStatusModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?UserStatusModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new UserStatusDto($row);

        return new UserStatusModel($dto);
    }
}