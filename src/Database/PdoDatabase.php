<?php

declare(strict_types=1);

namespace CRM\Database;

use PDO;

class PdoDatabase implements IDatabase
{
    private $db;

    public function __construct(PDO $db) 
    {
        $this->db = $db;
    }

    public function prepare(string $sql): IDatabaseResult
    {
        $stmt = $this->db->prepare($sql);

        return new PdoDatabaseResult($stmt);
    }

    public function lastInsertId(): int
    {
        return (int) $this->db->lastInsertId();
    }
}
