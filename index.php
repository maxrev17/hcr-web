<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim(array('debug' => true));
$dave = function($id) use ($app) {
    var_dump($app);
};

$app->get('/:id', function($id) use ($app) {
    var_dump($id);
});

$app->run();

?>
