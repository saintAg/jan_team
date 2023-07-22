<?php

namespace app\controllers;

use app\core\Controllerable;
use app\core\View;

abstract class AbstractController implements Controllerable
{
	protected View $view;

	public function __construct()
	{
		$this->view = new View();
	}
}