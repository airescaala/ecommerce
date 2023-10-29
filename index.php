<?php 

require_once("vendor/autoload.php");

$config = ['settings' => ['displayErrorDetails' => true]];
$app = new \Slim\App($config);

$app->get('/', function($request, $reponse) {
    
	echo "OK, it's correct now!";

});

$app->run();

 ?>
 