<?php

declare(strict_types=1);

namespace CRM\Roles;

class RolesDto 
{
    public int $id;
    public string $role;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->role = $row["role"] ?? "";
    }
}