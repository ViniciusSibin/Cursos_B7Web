<?php 
require 'vendor/autoload.php';

use classes\matematica\Basica;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
//$log = new Logger('index.php');
//$log->pushHandler(new StreamHandler('logs/log.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$m = new Basica();
echo $m->somar(10, 10);