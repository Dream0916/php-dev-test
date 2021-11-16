<?php

namespace silverorange\DevTest\Controller;

use silverorange\DevTest\Context;
use silverorange\DevTest\Template;

class PostIndex extends Controller
{
    private $posts = [];

    public function getContext(): Context
    {
        $context = new Context();
        $context->title = 'Posts';
        return $context;
    }

    public function getTemplate(): Template\Template
    {
        return new Template\PostIndex();
    }

    protected function loadData(): void
    {
        // TODO: Load posts from database here.
        $this->posts = [];
    }
}
