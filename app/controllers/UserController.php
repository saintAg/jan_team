<?php

namespace app\controllers;

use app\models\UserModel;
use app\core\Route;

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
		$email = filter_input(INPUT_POST, 'email');
		$password = filter_input(INPUT_POST, 'password');

        $user = $this->model->find($email);

		if($user && password_hash($password, PASSWORD_DEFAULT) == $user['password']){
			session_start();
			$_SESSION['user'] = $user;
			//$this->Session->add();
			Route::redirect('/index/index');
		}
	    Route::redirect('/user/index');
    }

    public function create ()
    {
        $email = filter_input(INPUT_POST, 'email');
        $user = $this->model->find($email);
        if (!$user) {
            $pass = filter_input(INPUT_POST, 'password');
            $passConf = filter_input(INPUT_POST, 'password_conf');
            if ($pass == $passConf){
                $user['email'] = $email;
                $user['pass'] = password_hash($pass);
                $this->model->add($user);
            }
        }

        Route::redirect('/index/index');
    }
}