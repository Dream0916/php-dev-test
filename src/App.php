<?php

namespace silverorange\DevTest;

use silverorange\DevTest\Template\Template;
use silverorange\DevTest\Template\About;
use silverorange\DevTest\Template\NotFound;

class App
{
    public function run(): void
    {
        $context = $this->getContext();

        $template = $this->getTemplate();
        $content = $template->render($context);

        header('Content-Type: text/html');

        echo $content;
    }

    protected function getContext(): Context
    {
        $context = new Context();

        // Do stuff like parse query params from $_GET here

        return $context;
    }

    protected function getTemplate(): Template
    {
        $path = $_SERVER['REQUEST_URI'];
        $template = new NotFound();

        // Switch to load different templates for different URLs.
        if (preg_match('@^/about@', $path) === 1) {
            $template = new About();
        }

        return $template;
    }
}
