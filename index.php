<?php 

require_once("vendor/autoload.php");
use Hcode\Page;

$config = ['settings' => ['displayErrorDetails' => true]];
$app = new \Slim\App($config);

$app->get('/', function($request, $reponse) {
    
	/*echo "OK, it's correct now!";
	$sql = new Hcode\DB\Sql();
	$results = $sql->select("SELECT * FROM tb_users");
	echo json_encode($results);
	*/
	$page = new Page();


});

$app->run();

 ?>
 