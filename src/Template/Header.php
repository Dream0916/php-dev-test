<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

/**
 * Template for common header content
 */
class Header implements Template
{
    public function render(Context $context): string
    {
        return <<<HTML
<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="utf-8" />
        <title>{$context->getTitle()} - My Site</title>
        <link rel="stylesheet" type="text/css" href="/assets/index.css" />
        <link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
    </head>
    <body>
        <main>
            <div class="container">
HTML;
    }
}
