<?php

require 'vendor/autoload.php';
require 'Ticket.php';
//require_once 'propel/Propel.php';

$app = new \Slim\Slim(array('debug' => true));

//Propel::init("/path/to/bookstore/build/conf/bookstore-conf.php");
//set_include_path("/path/to/bookstore/build/classes" . PATH_SEPARATOR . get_include_path());


$app->get('/:code', function($code) use ($app) {
  
    $gen = new TicketGenerator();
    echo$time = time();
    echo '<br>';
    echo$short = ($gen->getShortcode($time));
    echo '<br>';
    echo $gen->getPlaintext($short);
    
});

$app->run();

?>
