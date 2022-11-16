<?php

namespace silverorange\DevTest\Controller;

use silverorange\DevTest\Context;
use silverorange\DevTest\Template;

abstract class Controller
{
    protected \PDO $db;
    protected array $params = [];

    public function __construct(\PDO $db, array $params)
    {
        $this->setDatabase($db)->setParams($params);
        $this->loadData();
    }

    public function setDatabase(\PDO $db): self
    {
        $this->db = $db;
        return $this;
    }

    public function setParams(array $params): self
    {
        $this->params = $params;
        return $this;
    }

    public function getStatus(): string
    {
        return $_SERVER['SERVER_PROTOCOL'] . ' 200 OK';
    }

    public function getContentType(): string
    {
        return 'text/html';
    }

    abstract public function getContext(): Context;
    abstract public function getTemplate(): Template\Template;

    public function sendHeaders(): void
    {
        header($this->getStatus());
        header('Content-Type: ' . $this->getContentType());
    }

    protected function loadData(): void
    {
    }
}
