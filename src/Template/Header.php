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
        // @codingStandardsIgnoreStart
        return <<<HTML
<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="utf-8" />
        <title>{$context->title} - My Site</title>
        <link rel="stylesheet" type="text/css" href="/assets/index.css" />
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="/images/icon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <header class="header"></header>
        <main>
            <div class="container">
HTML;
        // @codingStandardsIgnoreEnd
    }
}
