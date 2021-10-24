<?php

declare(strict_types=1);

namespace CRM\Users;

use CRM\Database\IDatabase;
use CRM\Database\DatabaseException;

class UsersRepository implements IUsersRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(UsersDto $dto): int
    {
        $sql = "INSERT INTO `users` (`name_title`, `name_first`, `name_middle`, `name_last`, `email`, `password`, `user_roles`, `user_status`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->nameTitle,
                $dto->nameFirst,
                $dto->nameMiddle,
                $dto->nameLast,
                $dto->email,
                $dto->password,
                $dto->userRoles,
                $dto->userStatus
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(UsersDto $dto): int
    {
        $sql = "UPDATE `users` SET `name_title` = ?, `name_first` = ?, `name_middle` = ?, `name_last` = ?, `email` = ?, `password` = ?, `user_roles` = ?, `user_status` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->nameTitle,
                $dto->nameFirst,
                $dto->nameMiddle,
                $dto->nameLast,
                $dto->email,
                $dto->password,
                $dto->userRoles,
                $dto->userStatus,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?UsersDto
    {
        $sql = "SELECT `id`, `name_title`, `name_first`, `name_middle`, `name_last`, `email`, `password`, `user_roles`, `user_status`
                FROM `users` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new UsersDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `name_title`, `name_first`, `name_middle`, `name_last`, `email`, `password`, `user_roles`, `user_status`
                FROM `users`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new UsersDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `users` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}