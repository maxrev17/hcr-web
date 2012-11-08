<?php

require 'vendor/autoload.php';
require 'Utility.php';
require_once 'propel/Propel.php';

Propel::init("models/conf/hcr-conf.php");
set_include_path("models/classes" . PATH_SEPARATOR . get_include_path());

$app = new \Slim\Slim(array(
    'debug' => true
));

date_default_timezone_set('Europe/London');

$app->get('/', function() use ($app) {
    $app->render('index.php', array(
       'title' => 'Robadigz' 
    ));
});

// Redeem ticket route
$app->get('/:code', function($code) use ($app) {
    
    // Work out date from code 
    $date = Utility::getDatetime($code);
    $formatted_date = date("F j, Y, g:i a", $date);
    
    // Create ticket in DB
    $ticket = new Ticket();
    $ticket->setCode($code);
    $ticket->setCreatedAt($date);
    $ticket->save();
    
    // Retrieve all rows with same code
    $output = TicketQuery::create()->findByCode($code);
    foreach($output as $o){
        $ticketArray[] = $o->getCode();
    }
    
    // Work out info to send to view
    $visit_code = $ticketArray[0];
    $visit_count = count($ticketArray);
    $visit_date = $formatted_date;
    
    
    // Dispatch view with information
    $app->render('code.php', array(
        'title' => 'Robaaadiks',
        'visit_code' => $visit_code,
        'visit_count' => $visit_count,
        'visit_date' => $visit_date
    ));
    
});

$app->run();

?>
