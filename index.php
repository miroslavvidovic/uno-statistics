<?php

require __DIR__ . '/vendor/autoload.php';
require "bootstrap.php";

use Src\Controller\DataController;
use Src\Controller\BitovajaController;
use Src\Controller\CentralController;
use Src\Controller\PingController;

// Create new Plates instance
$templates = new League\Plates\Engine('src/templates/');

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        $controller = new DataController($dbConnection);
        $data = $controller->getReaderStatsToday();
        // Render a template
        echo $templates->render('readers', $data);
        break;
    case '' :
        $controller = new DataController($dbConnection);
        $data = $controller->getReaderStatsToday();
        // Render a template
        echo $templates->render('readers', $data);
        break;
    case '/readers' :
        $controller = new DataController($dbConnection);
        $data = $controller->getReaderStatsToday();
        // Render a template
        echo $templates->render('readers', $data);
        break;
    case '/readersall' :
        $controller = new DataController($dbConnection);
        $data = $controller->getReaderStats();
        // Render a template
        echo $templates->render('readers', $data);
        break;
    case '/readersYesterday' :
        $controller = new DataController($dbConnection);
        $data = $controller->getReaderStatsYesterday();
        // Render a template
        echo $templates->render('readers', $data);
        break;
    case '/restaurants' :
        $controller = new BitovajaController($bitovajaConnection);
        $dataB = $controller->getReaderStatsToday();
        $controller = new CentralController($centralConnection);
        $dataC = $controller->getReaderStatsToday();
        // Render a template
        $data = array_merge($dataB,$dataC);
        echo $templates->render('restaurants', $data);
        break;
    case '/restaurantsall' :
        $controller = new BitovajaController($bitovajaConnection);
        $dataB = $controller->getReaderStats();
        $controller = new CentralController($centralConnection);
        $dataC = $controller->getReaderStats();
        // Render a template
        $data = array_merge($dataB,$dataC);
        echo $templates->render('restaurants', $data);
        break;
    case '/restaurantsYesterday' :
        $controller = new BitovajaController($bitovajaConnection);
        $dataB = $controller->getReaderStatsYesterday();
        $controller = new CentralController($centralConnection);
        $dataC = $controller->getReaderStatsYesterday();
        // Render a template
        $data = array_merge($dataB,$dataC);
        echo $templates->render('restaurants', $data);
        break;
    case '/computers' :
        $controller = new PingController();
        $data = $controller->pingComputers();
        // Render a template
        echo $templates->render('computers', $data);
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}