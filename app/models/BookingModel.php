<?php

namespace app\models;

class BookingModel extends AbstractModel
{
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

    public function add($time,$date,$userId)
    {
        $reserve = $date .' '. $time;
        $timeStamp = strtotime($reserve);
        $date = date('Y-m-d H:i:s', $timeStamp);
        $query = "INSERT INTO reservations (user_id, date) VALUES ('$userId','$date')";
        $result = $this->db->query($query);
        $this->checkResult($result);

    }
}