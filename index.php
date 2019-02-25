<?php 

require_once("vendor/autoload.php");//do composer

use \Slim\Slim;//namespace
use \Hcode\page;//namespace
use \Hcode\pageadmin;//namespace

$app = new \Slim\Slim();//por causa das rotas para facilitar (ajuda no SEO)

$app->config('debug', true);

$app->get('/', function() {

	$page = new page();

	$page->setTpl("index");

});

$app->get('/admin', function() {

	$page = new pageadmin();

	$page->setTpl("index");

});

$app->run();

 ?>