<?php

namespace silverorange\DevTest;

class Database
{
    protected ?\PDO $pdo = null;
    protected string $dsn;

    public function __construct(string $dsn)
    {
        $this->dsn = $dsn;
    }

    public function setDSN(string $dsn): self
    {
        if ($this->dsn !== $dsn) {
            $this->dsn = $dsn;
            $this->pdo = null;
        }
        return $this;
    }

    public function getConnection(): \PDO
    {
        if (!$this->pdo instanceof \PDO) {
            $this->pdo = new \PDO($this->dsn);
        }

        return $this->pdo;
    }
}
