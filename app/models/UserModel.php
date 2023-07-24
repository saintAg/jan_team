<?php

namespace app\models;

class UserModel
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
     * @param $email
     * @return array|null
     * retrieves all users from a table
     */
    public function find($email) : ?array
    {
        $query = "SELECT * FROM (users) WHERE (email) = '$email'";

        $result = $this->db->query($query);
        $this->checkResult($result);

        return $result->fetch_assoc();
    }

    /**
     * @param $result
     * @return void
     * eroor bd
     */
    public function checkResult($result) : void
    {
        if(!$result){
            exit($this->db->error);
        }
    }

    /**
     * @param $user
     * @return void
     * save bd $user
     */
    public function add($user)
    {
       $query = "INSERT INTO users (login,email,password) VALUES ('$user[login]','$user[email]','$user[password]');";
        $result = $this->db->query($query);
        $this->checkResult($result);

    }
}