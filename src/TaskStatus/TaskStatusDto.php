<?php

declare(strict_types=1);

namespace CRM\TaskStatus;

class TaskStatusDto 
{
    public int $id;
    public string $status;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->status = $row["status"] ?? "";
    }
}