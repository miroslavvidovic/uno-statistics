<?php

require __DIR__ . '/vendor/autoload.php';


// Create new Plates instance
$templates = new League\Plates\Engine('src/templates/');

// Render a template
echo $templates->render('tables');