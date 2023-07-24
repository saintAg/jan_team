<?php

namespace app\models;

class BookingModel
{
    protected \mysqli $db;

    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if($this->db->connect_errno != 0){
            exit($this->db->connect_error);
        }
    }

    /**
     * @return array|null
     * retrieves all reservations from a table
     */
    public function find() : ?array
    {
        $query = "SELECT (date) FROM reservations;";
        $result = $this->db->query($query);
        $this->checkResult($result);

        return $result->fetch_assoc();
    }

    public function checkResult($result) : void
    {
        if(!$result){
            exit($this->db->error);
        }
    }
    public function add($time)
    {
        $query = "INSERT INTO reservation (data) VALUES (FROM_UNIXTIME('$time[time]'))";
        $result = $this->db->query($query);
        $this->checkResult($result);

    }
}