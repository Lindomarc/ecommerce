<?php
	
	use Lin\PhpClass\Page;
	use Lin\PhpClass\PageAdmin;
	use Slim\Slim;
	
	$app = new Slim;
	
	$app->config('debug', true);
	
	$app->get('/', function () {
		
		$page = new Page();
		$page->setTpl('index');
		
	});
	
	$app->get('/admin', function () {
		$page = new PageAdmin();
		$page->setTpl('index');
		
	});
	
	$app->run();