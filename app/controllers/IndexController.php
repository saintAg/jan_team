<?php

namespace app\controllers;

class IndexController extends AbstractController
{
    /**
     * @return void
     * call render with index_index page in $view
     */
	public function index(): void
	{
		$this->view->render('index_index');
	}

}