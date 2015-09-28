<?php

// autoload classes, using composer autoloader here
require __DIR__ .'/../vendor/autoload.php';

// create new Application object
$app = new \DependencyInjectionTraining\Application();

// just start some function from there
$app->start();
