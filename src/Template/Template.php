<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

interface Template
{
    public function render(Context $context): string;
}
