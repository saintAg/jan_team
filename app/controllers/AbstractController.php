<?php

namespace app\controllers;

use app\core\Controllerable;
use app\core\View;

abstract class AbstractController implements Controllerable
{
    /**
     * @var View
     * create $view;
     */
	protected View $view;

    /**
     * set object View into $view;
     */
	public function __construct()
	{
		$this->view = new View();
	}
}