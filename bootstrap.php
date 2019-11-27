<?php
require 'vendor/autoload.php';
use Dotenv\Dotenv;

use Src\System\DatabaseConnector;
use Src\System\BitovajaConnector;
use Src\System\CentralConnector;

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

$dbConnection = (new DatabaseConnector())->getConnection();
$bitovajaConnection = (new BitovajaConnector())->getConnection();
$centralConnection = (new CentralConnector())->getConnection();