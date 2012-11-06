<?php

require 'vendor/autoload.php';
require 'Ticket.php';
require 'TicketGenerator.php';

$app = new \Slim\Slim(array('debug' => true));
$propel = new Propel();


$app->get('/:code', function($code) use ($app, $propel) {
    $ticket = new Ticket();
    $ticket->checkTicket($code);
    $ticket->expireTicket($code);
    
    $gen = new TicketGenerator();
    $gen->generateTickets(10);
});

$app->run();

?>
