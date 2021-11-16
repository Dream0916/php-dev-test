<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class PostIndex extends Layout
{
    protected function renderPage(Context $context): string
    {
        // @codingStandardsIgnoreStart
        return <<<HTML
<p>SHOW ALL THE POSTS HERE</p>
HTML;
        // @codingStandardsIgnoreEnd
    }
}
