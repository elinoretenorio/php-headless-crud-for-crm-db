<?php

declare(strict_types=1);

namespace CRM\Contact;

class ContactService implements IContactService
{
    private IContactRepository $repository;

    public function __construct(IContactRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(ContactModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(ContactModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?ContactModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new ContactModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var ContactDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new ContactModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?ContactModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new ContactDto($row);

        return new ContactModel($dto);
    }
}