<?php

namespace app\controllers;

use app\core\TemporaryStorage;

class IndexController extends AbstractController
{
    /**
     * @return void
     * call render with index_index page in $view
     */
	public function index(): void
	{
		$user = TemporaryStorage::check();
		$this->view->render('index_index', ['user' => $user]);
	}
}