<?php

namespace app\controllers;

use app\core\Route;
use app\models\BookingModel;
use app\core\TemporaryStorage;

class BookingController extends AbstractController
{
    private BookingModel $model;
    /**
     * @return mixed|void
     */
    public function __construct()
    {
        parent::__construct();

        $this->model = new BookingModel();
    }

    public function index(): void
    {
        $date = filter_input(INPUT_GET,'date');
        if(empty($date)){
            $date = date("Y-m-d");
        }
        $dates = $this->model->find($date);
		$hours = [];
        foreach ($dates as $value){
			$hour = substr($value[0], 11, 2);
			$hours[] = (int)$hour;
        }
	    $user = TemporaryStorage::check();
        if($user){
            $this->view->render('booking_index', [
				'user' => $user,
                'date' => $date,
	            'hours' => $hours,
            ]);
        }else{
            $this->view->render('index_index');
        }
    }

    public function reserve (): void
    {
        $reserveTime = filter_input(INPUT_POST, 'time');
        $reserveDate = filter_input(INPUT_POST, 'date');

        $user = TemporaryStorage::check();

        $this->model->add($reserveTime,$reserveDate,$user['id']);

        $this->view->render('booking_success', ['user' => $user]);
    }
}