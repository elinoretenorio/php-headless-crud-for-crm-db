<?php

declare(strict_types=1);

namespace CRM\Database;

use PDOStatement;
use PDO;

class PdoDatabaseResult implements IDatabaseResult
{
    private $stmt;

    public function __construct(PDOStatement $stmt) 
    {
        $this->stmt = $stmt;
    }

    public function execute(?array $parameters = null): void
    {
        if ($parameters === null) {
            $this->stmt->execute();
            return;
        }
        
        $this->stmt->execute($parameters);
    }

    public function rowCount(): int
    {
        return $this->stmt->rowCount();
    }

    public function fetchAll(): array
    {
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
