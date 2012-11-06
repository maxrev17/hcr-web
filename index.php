<?php

require 'vendor/autoload.php';
require 'Utility.php';

$app = new \Slim\Slim(array('debug' => true));

$propel = new Propel();


$app->get('/:code', function($code) use ($app, $propel) {  
    $ticket = new Ticket();
    $ticket->getCode();    
});

$app->run();

?>
