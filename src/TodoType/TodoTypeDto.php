<?php

declare(strict_types=1);

namespace CRM\TodoType;

class TodoTypeDto 
{
    public int $id;
    public string $type;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->type = $row["type"] ?? "";
    }
}