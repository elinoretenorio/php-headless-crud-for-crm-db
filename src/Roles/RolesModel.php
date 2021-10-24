<?php

declare(strict_types=1);

namespace CRM\Roles;

use JsonSerializable;

class RolesModel implements JsonSerializable
{
    private int $id;
    private string $role;

    public function __construct(RolesDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->role = $dto->role;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function toDto(): RolesDto
    {
        $dto = new RolesDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->role = $this->role ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "role" => $this->role,
        ];
    }
}