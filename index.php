<?php 

require_once("vendor/autoload.php");

use \Slim\App;
use \Hcode\Page;
use \Hcode\PageAdmin;

$config = ['settings' => ['displayErrorDetails' => true]];
$app = new App($config);

$app->get('/', function($request, $reponse) {
	$page = new Page();
	$page->setTpl("index");
});

$app->get('/admin', function($request, $reponse) {
	$page = new PageAdmin();
	$page->setTpl("index");
});

$app->run();

 ?>