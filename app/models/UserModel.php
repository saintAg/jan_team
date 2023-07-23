<?php

namespace app\models;

class UserModel
{
    protected $db;

    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if($this->db->connect_errno != 0){
            exit($this->db->connect_error);
        }
    }

    public function find($email) : array
    {
        $query = "SELECT * FROM (users) WHERE (email) = '$email'";

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
}