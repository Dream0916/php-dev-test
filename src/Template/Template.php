<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

interface Template
{
    /**
     * Renders a template to a tring with provided context
     *
     * @param Context $context the provided request context.
     *
     * @return string the rendered template.
     */
    public function render(Context $context): string;
}
