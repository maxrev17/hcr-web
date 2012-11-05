<?php

require 'vendor/autoload.php';
require 'Ticket.php';

$app = new \Slim\Slim(array('debug' => true));


$app->get('/:code', function($code) use ($app) {
    $ticket = new Ticket();
    $ticket->checkTicket($code);
    $ticket->expireTicket($code);
});

$app->run();

?>
