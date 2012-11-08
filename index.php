<?php

require 'vendor/autoload.php';
require 'Utility.php';
require_once 'propel/Propel.php';

Propel::init("models/conf/hcr-conf.php");
set_include_path("models/classes" . PATH_SEPARATOR . get_include_path());

$app = new \Slim\Slim(array('debug' => true));

date_default_timezone_set('Europe/London');

// Redeem ticket route
$app->get('/:code', function($code) use ($app) {  
    $ticket = new TicketQuery();
    $dave = $ticket->findOneByCode($code)->toArray();
    $geoff = $dave["Code"];
    var_dump($geoff);
    
});

// Index route
$app->get('/', function() use ($app) {
    var_dump('index');
});

$app->run();

?>
