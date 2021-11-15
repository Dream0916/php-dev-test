<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class NotFound implements Template
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
Page Not Found
HTML;
        $content .= $this->footer->render($context);
        return $content;
    }
}
