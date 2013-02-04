<?php

require 'vendor/autoload.php';
require 'utility.php';


$app = new \Slim\Slim(array(
    'debug' => true
));

date_default_timezone_set('Europe/London');

$app->get('/', function() use ($app) {
    $app->render('index.php', array(
       'title' => 'Home - CHARLES' 
    ));
});



$app->get('/video', function() use ($app) {
    
    // calculate some stats
    //$hits = TicketQuery::create()->count();
        
    $app->render('video.php', array(
        'title' => 'Video - CHARLES' //,
        //'site_hits' => $hits
    ));
});

$app->get('/about', function() use ($app) {
    $app->render('about.php', array(
        'title' => 'About - CHARLES'
    ));
});

//$app->get('/favicon.ico', function() use ($app) {
//    return false;
//});

// Redeem ticket route
/*$app->get('/:code', function($code) use ($app) {
    
    $code = strtolower($code);
    
    // Debugging Stuff
    //echo Utility::getShortcode($code)."<BR>";
    //echo Utility::getDatetime(Utility::getShortcode($code));
    //die();    
    
    // Work out date from code 
    $date = '135' . Utility::getDatetime($code);
    $formatted_date = date("F j, Y, g:i a", $date);

    if($date < 1352414128 OR $date > 1356998400){
        // invalid string
        $app->render('error.php', array('title' => 'Oopsie!'));
        return false;
    }
    
    // Create ticket in DB
    $ticket = new Ticket();
    $ticket->setCode($code);
    $ticket->setPrintedAt($date);
    $ticket->save();
    
    // Retrieve all rows with same code
    $visit_count = TicketQuery::create()->filterByCode($code)->count();
    
    // Work out info to send to view
    $visit_code = $code;
    $visit_date = $formatted_date;
    
    // Dispatch view with information
    $app->render('code.php', array(
        'title' => 'Thanks for clicking - CHARLES',
        'visit_code' => $visit_code,
        'visit_count' => $visit_count,
        'visit_date' => $visit_date
    ));
    
});
*/
$app->run();

?>
