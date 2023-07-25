<?php

namespace app\models;

class AbstractModel
{
	protected \mysqli $db;

	public function __construct()
	{
		$this->db = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if($this->db->connect_errno != 0){
			exit($this->db->connect_error);
		}
	}

	public function checkResult($result) : void
	{
		if(!$result){
			exit($this->db->error);
		}
	}


}