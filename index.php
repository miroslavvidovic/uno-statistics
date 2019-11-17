<?php

require __DIR__ . '/vendor/autoload.php';
require "bootstrap.php";

use Src\Controller\DataController;

// Create new Plates instance
$templates = new League\Plates\Engine('src/templates/');


$controller = new DataController($dbConnection);
$data = $controller->getReaderStats();
// Render a template
echo $templates->render('readers', $data);