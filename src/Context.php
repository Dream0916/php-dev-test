<?php

namespace silverorange\DevTest;

class Context
{
    protected $title = '';

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
