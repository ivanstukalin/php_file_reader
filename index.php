<?php

require(__DIR__ . '/vendor/autoload.php');

use Classes\FileDataHandler;
use Classes\StatFromFileStorage;

$path = "access_log.txt";

$statFromFile = new StatFromFileStorage();
$fileDataHandler = new FileDataHandler($path);

var_dump($fileDataHandler->getFileInfo());





