<?php

declare(strict_types=1);

namespace CRM\Notes;

use CRM\Database\IDatabase;
use CRM\Database\DatabaseException;

class NotesRepository implements INotesRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(NotesDto $dto): int
    {
        $sql = "INSERT INTO `notes` (`date`, `notes`, `is_new_todo`, `todo_type_id`, `todo_desc_id`, `todo_due_date`, `contact`, `task_status`, `task_update`, `sales_rep`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->date,
                $dto->notes,
                $dto->isNewTodo,
                $dto->todoTypeId,
                $dto->todoDescId,
                $dto->todoDueDate,
                $dto->contact,
                $dto->taskStatus,
                $dto->taskUpdate,
                $dto->salesRep
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(NotesDto $dto): int
    {
        $sql = "UPDATE `notes` SET `date` = ?, `notes` = ?, `is_new_todo` = ?, `todo_type_id` = ?, `todo_desc_id` = ?, `todo_due_date` = ?, `contact` = ?, `task_status` = ?, `task_update` = ?, `sales_rep` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->date,
                $dto->notes,
                $dto->isNewTodo,
                $dto->todoTypeId,
                $dto->todoDescId,
                $dto->todoDueDate,
                $dto->contact,
                $dto->taskStatus,
                $dto->taskUpdate,
                $dto->salesRep,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?NotesDto
    {
        $sql = "SELECT `id`, `date`, `notes`, `is_new_todo`, `todo_type_id`, `todo_desc_id`, `todo_due_date`, `contact`, `task_status`, `task_update`, `sales_rep`
                FROM `notes` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new NotesDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `date`, `notes`, `is_new_todo`, `todo_type_id`, `todo_desc_id`, `todo_due_date`, `contact`, `task_status`, `task_update`, `sales_rep`
                FROM `notes`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new NotesDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `notes` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}