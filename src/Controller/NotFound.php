<?php

namespace silverorange\DevTest\Controller;

use silverorange\DevTest\Context;
use silverorange\DevTest\Template;

class NotFound extends Controller
{
    public function getContext(): Context
    {
        $context = new Context();
        $context->title = 'Not Found';
        $context->content = 'Page was not found.';
        return $context;
    }

    public function getTemplate(): Template\Template
    {
        return new Template\NotFound();
    }

    public function getStatus(): string
    {
        return $_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found';
    }
}
