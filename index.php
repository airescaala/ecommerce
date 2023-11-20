<?php 

require_once("vendor/autoload.php");

use \Slim\App;
use \Hcode\Page;

$config = ['settings' => ['displayErrorDetails' => true]];
$app = new App($config);

$app->get('/', function($request, $reponse) {
	$page = new Page();
	$page->setTpl("index");
});

$app->run();

 ?>