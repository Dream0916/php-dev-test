<?php

namespace silverorange\DevTest;

require __DIR__ . '/../vendor/autoload.php';

$config = new Config();
$db = new Database($config->dsn);

$app = new App();
return $app->run();
