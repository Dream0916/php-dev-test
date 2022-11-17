<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class PostIndex extends Layout
{
    protected function renderPage(Context $context): string
    {
        $postList = "<ul>";
        foreach ($context->posts as $post) {
            /** @var $postList make the posts list */
            $postList .= "<li><a href='/posts/" . $post["id"] . "'><span>" . $post["title"] . "</span><span>" . $post["full_name"] . "</span></a></li>";
        }
        $postList .= "</ul>";
        // @codingStandardsIgnoreStart
        return <<<HTML
                <h1 style="text-align: center;">SHOW ALL THE POSTS HERE</h1>
                <div>
                $postList
                </div>
                HTML;
        // @codingStandardsIgnoreEnd
    }
}
