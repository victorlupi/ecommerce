<?php 

require_once("vendor/autoload.php");//do composer

use \Slim\Slim;//namespace
use \Hcode\page;//namespace

$app = new \Slim\Slim();//por causa das rotas para facilitar (ajuda no SEO)

$app->config('debug', true);

$app->get('/', function() {

	$page = new page();

	$page->setTpl("index");

});

$app->run();

 ?>