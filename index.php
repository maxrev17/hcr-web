<?php

require 'vendor/autoload.php';
require 'Ticket.php';

$app = new \Slim\Slim(array('debug' => true));

$propel = new Propel();


$app->get('/:code', function($code) use ($app, $propel) {  
    $ticket = new Ticket();
    echo$time = time();
    echo '<br>';
    echo$short = ($ticket->getShortcode($time));
    echo '<br>';
    echo $ticket->getPlaintext($short);
});

$app->run();

?>
