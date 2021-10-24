<?php

declare(strict_types=1);

namespace CRM\TodoType;

use JsonSerializable;

class TodoTypeModel implements JsonSerializable
{
    private int $id;
    private string $type;

    public function __construct(TodoTypeDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->type = $dto->type;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function toDto(): TodoTypeDto
    {
        $dto = new TodoTypeDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->type = $this->type ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "type" => $this->type,
        ];
    }
}