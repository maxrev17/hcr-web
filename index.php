<?php

require 'vendor/autoload.php';
require 'Utility.php';
require_once 'propel/Propel.php';

Propel::init("models/conf/hcr-conf.php");
set_include_path("models/classes" . PATH_SEPARATOR . get_include_path());

$app = new \Slim\Slim(array(
    'debug' => true,
));

date_default_timezone_set('Europe/London');

// Redeem ticket route
$app->get('/:code', function($code) use ($app) {  
    $ticket = new Ticket();
    $ticket->setCode($code);
    $ticket->setCreatedAt(Utility::getDateTime($code));
    $ticket->save();
    
    $output = TicketQuery::create()->findByCode($code);
    
    foreach($output as $o){
        $ticketArray[] = $o->getCode();
    }
    
    $app->render('index.php', array('title' => 'Robaaadiks', 'ticketArray' => $ticketArray));
    
});

$app->run();

?>
