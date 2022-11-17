<?php

namespace silverorange\DevTest\Controller;

use silverorange\DevTest\Context;
use silverorange\DevTest\Template;

class PostIndex extends Controller
{
    private array $posts = [];

    public function getContext(): Context
    {
        $context = new Context();
        $context->title = 'Posts';
        $context->posts = $this->posts;
        return $context;
    }

    public function getTemplate(): Template\Template
    {
        return new Template\PostIndex();
    }

    protected function loadData(): void
    {
        // TODO: Load posts from database here.
        //        get all posts from table
        $sth = $this->db->prepare("SELECT posts.*, authors.full_name FROM posts LEFT JOIN authors ON posts.author = authors.id ORDER BY posts.created_at");
        $sth->execute();
        $result = $sth->fetchALl();
        if ($result) {
        //            put the data to value
            $this->posts = $result;
        } else {
            $this->posts = [];
        }
    }
}
