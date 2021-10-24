<?php

declare(strict_types=1);

namespace CRM\TodoDesc;

use JsonSerializable;

class TodoDescModel implements JsonSerializable
{
    private int $id;
    private string $description;

    public function __construct(TodoDescDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->description = $dto->description;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function toDto(): TodoDescDto
    {
        $dto = new TodoDescDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->description = $this->description ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "description" => $this->description,
        ];
    }
}