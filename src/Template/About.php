<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

/**
 * Template for the about page
 */
class About implements Template
{
    protected $header;
    protected $footer;

    public function __construct()
    {
        $this->header = new Header();
        $this->footer = new Footer();
    }

    public function render(Context $context): string
    {
        $content = $this->header->render($context);
        $content .= <<<HTML

HTML;
        $content .= $this->footer->render($context);
        return $content;
    }
}
