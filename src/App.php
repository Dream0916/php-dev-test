<?php

namespace silverorange\DevTest;

class App
{
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function run(): bool
    {
        $path = $_SERVER['REQUEST_URI'];

        // Serve static assets.
        if (preg_match('@^/(assets|images)(/|$)@', $path) === 1) {
            return false;
        }

        $context = $this->getContext($path);

        $template = $this->getTemplate($path);
        $content = $template->render($context);

        header('Content-Type: text/html');

        echo $content;

        return true;
    }

    protected function getContext(string $path): Context
    {
        $context = new Context();
        $context->setTitle('Not Found');

        // TODO: Do stuff like parse query params from $_GET here if required.

        // Switch to set up different context data for different URLs.
        if (preg_match('@^/posts/?$@', $path) === 1) {
            // TODO: Load required post index data from the database here.

            $context->setTitle('Posts');
        } elseif (preg_match('@^/posts/([a-f0-9-]+)/?$@', $path, $matches) === 1) {
            $post_id = $matches[1];
            $context->setPostId($post_id);

            // TODO: Load required post data from the database here.

            $title = '';
            $context->setTitle('Post' . $title);
        } elseif (preg_match('@^/checkout/?$@', $path) === 1) {
            $context->setTitle('Checkout');
        }

        return $context;
    }

    protected function getTemplate(string $path): Template\Template
    {
        $template = new Template\NotFound();

        // Switch to load different templates for different URLs.
        if (preg_match('@^/posts/?$@', $path) === 1) {
            $template = new Template\PostIndex();
        } elseif (preg_match('@^/posts/[a-f0-9-]+/?$@', $path) === 1) {
            $template = new Template\PostDetails();
        } elseif (preg_match('@^/checkout/?$@', $path) === 1) {
            $template = new Template\Checkout();
        }

        return $template;
    }
}
