<?php

namespace models;

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
        $query = "SELECT * FROM reservations;";
        $result = $this->db->query($query);
        $this->checkResult($result);

        return $result->fetch_assoc();
    }

}
