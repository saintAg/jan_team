<?php

namespace app\controllers;

use app\models\UserModel;

class UserController extends AbstractController
{
	private UserModel $model;

	public function __construct()
	{
		parent::__construct();

		$this->model = new UserModel();
	}

	public function index(): void //singIn
	{
		$this->view->render('user_sign-in');
	}

	public function registration(): void
	{
		$this->view->render('user_sign-up');
	}

    public function auth()
    {
        $this->model->find('Test@gmail.com');
    }
}