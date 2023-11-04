<?php 

require_once("vendor/autoload.php");

$config = ['settings' => ['displayErrorDetails' => true]];
$app = new \Slim\App($config);

$app->get('/', function($request, $reponse) {
    
	/*echo "OK, it's correct now!";
	$sql = new Hcode\DB\Sql();
	$results = $sql->select("SELECT * FROM tb_users");
	echo json_encode($results);
	*/
	//$page = new Page();
	//$page->setTpl("index");

	$page = new Hcode\Page();
	$page->setTpl("index");

});

$app->run();

 ?>