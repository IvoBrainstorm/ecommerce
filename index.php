<?php 

session_start();

require_once("vendor/autoload.php");
use \Slim\Slim;


$app = new Slim();

require_once("site.php");
require_once("admin.php");
require_once("admin-users.php");
require_once("categories.php");
require_once("products.php");

$app->run();

 ?>