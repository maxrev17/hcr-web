<?php

require 'vendor/autoload.php';
require 'utility.php';
require_once 'propel/Propel.php';

Propel::init("models/conf/hcr-conf.php");
set_include_path("models/classes" . PATH_SEPARATOR . get_include_path());

$app = new \Slim\Slim(array(
    'debug' => true
));

date_default_timezone_set('Europe/London');

$app->get('/', function() use ($app) {
    $app->render('index.php', array(
       'title' => 'Robaadix' 
    ));
});

$app->get('/robot', function() use ($app) {
    $app->render('robot.php', array(
        'title' => 'Robaadix'
    ));
});

$app->get('/about', function() use ($app) {
    $app->render('about.php', array(
        'title' => 'Robaadix'
    ));
});

//$app->get('/favicon.ico', function() use ($app) {
//    return false;
//});

// Redeem ticket route
$app->get('/:code', function($code) use ($app) {
    
    // Work out date from code 
    $date = '135' . Utility::getDatetime($code);
    $formatted_date = date("F j, Y, g:i a", $date);

    if($date > 1352414128 AND $date < 1356998400){
        // invalid string
    }
    
    // Create ticket in DB
    $ticket = new Ticket();
    $ticket->setCode($code);
    $ticket->setPrintedAt($date);
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
        'title' => 'Robaadix',
        'visit_code' => $visit_code,
        'visit_count' => $visit_count,
        'visit_date' => $visit_date
    ));
    
});

$app->run();

?>
