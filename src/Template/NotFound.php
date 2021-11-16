<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class NotFound extends Layout
{
    protected function renderPage(Context $context): string
    {
        // @codingStandardsIgnoreStart
        return <<<HTML
<p>Page Not Found</p>
HTML;
        // @codingStandardsIgnoreEnd
    }
}
