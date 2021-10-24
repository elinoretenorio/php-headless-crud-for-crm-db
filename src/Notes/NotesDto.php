<?php

declare(strict_types=1);

namespace CRM\Notes;

class NotesDto 
{
    public int $id;
    public string $date;
    public string $notes;
    public int $isNewTodo;
    public int $todoTypeId;
    public int $todoDescId;
    public string $todoDueDate;
    public int $contact;
    public int $taskStatus;
    public string $taskUpdate;
    public int $salesRep;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->date = $row["date"] ?? "";
        $this->notes = $row["notes"] ?? "";
        $this->isNewTodo = (int) ($row["is_new_todo"] ?? 0);
        $this->todoTypeId = (int) ($row["todo_type_id"] ?? 0);
        $this->todoDescId = (int) ($row["todo_desc_id"] ?? 0);
        $this->todoDueDate = $row["todo_due_date"] ?? "";
        $this->contact = (int) ($row["contact"] ?? 0);
        $this->taskStatus = (int) ($row["task_status"] ?? 0);
        $this->taskUpdate = $row["task_update"] ?? "";
        $this->salesRep = (int) ($row["sales_rep"] ?? 0);
    }
}