<?php

namespace Mtinangi\Capture;

use Mtinangi\Views\View;

class Capture
{
	protected $view;

	protected $pdf;

	public function __construct()
	{
		$this->view = new View;
	}

	public function load($filename, array $data = [])
	{
		$view = $this->view->render($filename, $data);
		$this->pdf = $this->captureImage($view);
	}

	public function captureImage($view)
	{
		$path = $this->writeFile($view);

		
	}

	public function writeFile($view)
	{
		file_put_contents($path = 'storage/' . md5(uniqid()) . '.pdf', $view);
		return $path;
	}
}
