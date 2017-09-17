<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Kapi\Core\App;

$app = new App();
$response = $app->run();
$app->emit($response);
