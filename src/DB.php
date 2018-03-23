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

    public function setDSN($dsn)
    {
        if ($this->dsn !== $dsn) {
            $this->dsn = $dsn;
            $this->pdo = null;
        }
    }

    public function getConnection()
    {
        if (!$this->pdo instanceof \PDO) {
            $this->pdo = new \PDO($this->dsn);
        }

        return $this->pdo;
    }
}
