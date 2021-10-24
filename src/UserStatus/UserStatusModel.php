<?php

declare(strict_types=1);

namespace CRM\UserStatus;

use JsonSerializable;

class UserStatusModel implements JsonSerializable
{
    private int $id;
    private string $status;

    public function __construct(UserStatusDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->status = $dto->status;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function toDto(): UserStatusDto
    {
        $dto = new UserStatusDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->status = $this->status ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "status" => $this->status,
        ];
    }
}