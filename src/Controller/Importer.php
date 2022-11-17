<?php

namespace silverorange\DevTest\Controller;

use PDO;
use PDOException;
use silverorange\DevTest\Context;
use silverorange\DevTest\Model;
use silverorange\DevTest\Template;

class Importer extends Controller
{
    private ?Model\Post $post = null;

    public function getContext(): Context
    {
        $context = new Context();
        $context->title = 'Checkout';
        return $context;
    }

    public function getTemplate(): Template\Template
    {
        //        get data path
        $base_path = dirname(dirname(dirname(__FILE__))) . "\\data";
        $files = scandir($base_path);
        //        get each file
        foreach ($files as $file) {
            $file_type = explode(".", $file);
            $ext = end($file_type);
        //           check the json file
            if ($ext == "json") {
                $path = $base_path . "\\" . $file;
        //                read json file
                $data = file_get_contents($path);
                $row = json_decode($data, true);
                try {
        //                    insert data to table
                    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO posts (id, title, body, created_at, modified_at, author) VALUES ('$row[id]', '$row[title]', '$row[body]', '$row[created_at]', '$row[modified_at]', '$row[author]')";
                    $this->db->exec($sql);
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
        }
        return new Template\Importer();
    }
}
