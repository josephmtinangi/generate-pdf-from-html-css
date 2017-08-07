<?php

require 'app/bootstrap.php';

$capture = new \Mtinangi\Capture\Capture;

$view = new \Mtinangi\Views\View;

echo $view->load('invoice.php', [
	'number' => 67456475
]);
