<?php

declare(strict_types=1);

namespace CRM\Notes;

use JsonSerializable;

class NotesModel implements JsonSerializable
{
    private int $id;
    private string $date;
    private string $notes;
    private int $isNewTodo;
    private int $todoTypeId;
    private int $todoDescId;
    private string $todoDueDate;
    private int $contact;
    private int $taskStatus;
    private string $taskUpdate;
    private int $salesRep;

    public function __construct(NotesDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->date = $dto->date;
        $this->notes = $dto->notes;
        $this->isNewTodo = $dto->isNewTodo;
        $this->todoTypeId = $dto->todoTypeId;
        $this->todoDescId = $dto->todoDescId;
        $this->todoDueDate = $dto->todoDueDate;
        $this->contact = $dto->contact;
        $this->taskStatus = $dto->taskStatus;
        $this->taskUpdate = $dto->taskUpdate;
        $this->salesRep = $dto->salesRep;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getNotes(): string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }

    public function getIsNewTodo(): int
    {
        return $this->isNewTodo;
    }

    public function setIsNewTodo(int $isNewTodo): void
    {
        $this->isNewTodo = $isNewTodo;
    }

    public function getTodoTypeId(): int
    {
        return $this->todoTypeId;
    }

    public function setTodoTypeId(int $todoTypeId): void
    {
        $this->todoTypeId = $todoTypeId;
    }

    public function getTodoDescId(): int
    {
        return $this->todoDescId;
    }

    public function setTodoDescId(int $todoDescId): void
    {
        $this->todoDescId = $todoDescId;
    }

    public function getTodoDueDate(): string
    {
        return $this->todoDueDate;
    }

    public function setTodoDueDate(string $todoDueDate): void
    {
        $this->todoDueDate = $todoDueDate;
    }

    public function getContact(): int
    {
        return $this->contact;
    }

    public function setContact(int $contact): void
    {
        $this->contact = $contact;
    }

    public function getTaskStatus(): int
    {
        return $this->taskStatus;
    }

    public function setTaskStatus(int $taskStatus): void
    {
        $this->taskStatus = $taskStatus;
    }

    public function getTaskUpdate(): string
    {
        return $this->taskUpdate;
    }

    public function setTaskUpdate(string $taskUpdate): void
    {
        $this->taskUpdate = $taskUpdate;
    }

    public function getSalesRep(): int
    {
        return $this->salesRep;
    }

    public function setSalesRep(int $salesRep): void
    {
        $this->salesRep = $salesRep;
    }

    public function toDto(): NotesDto
    {
        $dto = new NotesDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->date = $this->date ?? "";
        $dto->notes = $this->notes ?? "";
        $dto->isNewTodo = (int) ($this->isNewTodo ?? 0);
        $dto->todoTypeId = (int) ($this->todoTypeId ?? 0);
        $dto->todoDescId = (int) ($this->todoDescId ?? 0);
        $dto->todoDueDate = $this->todoDueDate ?? "";
        $dto->contact = (int) ($this->contact ?? 0);
        $dto->taskStatus = (int) ($this->taskStatus ?? 0);
        $dto->taskUpdate = $this->taskUpdate ?? "";
        $dto->salesRep = (int) ($this->salesRep ?? 0);

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "date" => $this->date,
            "notes" => $this->notes,
            "is_new_todo" => $this->isNewTodo,
            "todo_type_id" => $this->todoTypeId,
            "todo_desc_id" => $this->todoDescId,
            "todo_due_date" => $this->todoDueDate,
            "contact" => $this->contact,
            "task_status" => $this->taskStatus,
            "task_update" => $this->taskUpdate,
            "sales_rep" => $this->salesRep,
        ];
    }
}