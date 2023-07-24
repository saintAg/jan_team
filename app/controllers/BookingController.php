<?php

namespace app\controllers;

use app\core\Route;
use app\models\BookingModel;

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

    public function index()
    {
        session_start();
        if($_SESSION['user']){
            $this->view->render('booking_index');
        }else{
            $this->view->render('index_index');
        }
    }

    public function reserve ()
    {
        $reserve = [];
        $reserve = filter_input(INPUT_POST, 'time');
        foreach ($reserve as $time)
        {
            $this->model->add($time);
        }
        Route::redirect('');
    }
}