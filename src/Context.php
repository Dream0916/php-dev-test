<?php

namespace silverorange\DevTest;

class Context
{
    protected $title = '';
    protected $post_id = '';

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setPostId(string $post_id): self
    {
        $this->post_id = $post_id;
        return $this;
    }

    public function getPostId(): string
    {
        return $this->post_id;
    }
}
