<?php

declare(strict_types=1);

namespace CRM\TodoDesc;

class TodoDescDto 
{
    public int $id;
    public string $description;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->description = $row["description"] ?? "";
    }
}