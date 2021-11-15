<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class Footer implements Template
{
    public function render(Context $context): string
    {
        return <<<HTML

HTML;
    }
}
