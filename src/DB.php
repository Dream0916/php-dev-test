<?php

namespace silverorange\DevTest;

class DB
{
    protected $pdo;
    protected $dsn;

    public function __construct($dsn)
    {
        $this->setDSN($dsn);
    }

    public function setDSN($dsn): void
    {
        if ($this->dsn !== $dsn) {
            $this->dsn = $dsn;
            $this->pdo = null;
        }
    }

    public function getConnection(): \PDO
    {
        if (!$this->pdo instanceof \PDO) {
            $this->pdo = new \PDO($this->dsn);
        }

        return $this->pdo;
    }
}
