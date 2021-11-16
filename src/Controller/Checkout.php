<?php

namespace silverorange\DevTest\Controller;

use silverorange\DevTest\Context;
use silverorange\DevTest\Template;

class Checkout extends Controller
{
    public function getContext(): Context
    {
        $context = new Context();
        $context->title = 'Checkout';
        return $context;
    }

    public function getTemplate(): Template\Template
    {
        return new Template\Checkout();
    }
}
