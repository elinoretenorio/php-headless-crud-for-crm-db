<?php

declare(strict_types=1);

namespace CRM\ContactStatus;

class ContactStatusService implements IContactStatusService
{
    private IContactStatusRepository $repository;

    public function __construct(IContactStatusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(ContactStatusModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(ContactStatusModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?ContactStatusModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new ContactStatusModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var ContactStatusDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new ContactStatusModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?ContactStatusModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new ContactStatusDto($row);

        return new ContactStatusModel($dto);
    }
}