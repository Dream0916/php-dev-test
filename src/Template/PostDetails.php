<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class PostDetails extends Layout
{
    protected function renderPage(Context $context): string
    {
        // @codingStandardsIgnoreStart
        return <<<HTML
<p>SHOW CONTENT FOR {$context->getPostId()} HERE</p>
HTML;
        // @codingStandardsIgnoreEnd
    }
}
