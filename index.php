<?php

require 'app/bootstrap.php';

$capture = new \Mtinangi\Capture\Capture;

$capture->load('invoice.php', [
	'order'  => '123456',
	'name'   => 'Joseph Mtinangi',
	'amount' => 49.69,
]);
