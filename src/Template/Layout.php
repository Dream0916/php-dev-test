<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

abstract class Layout implements Template
{
    protected Template $header;
    protected Template $footer;

    public function __construct()
    {
        $this->header = new Header();
        $this->footer = new Footer();
    }

    public function render(Context $context): string
    {
        $content = $this->header->render($context);
        $content .= "\n" . $this->renderPage($context) . "\n";
        $content .= $this->footer->render($context);

        return $content;
    }

    abstract protected function renderPage(Context $context): string;
}
