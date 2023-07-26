<?php

namespace app\core;

class TemporaryStorage
{
	static public function add($user): void
	{
		session_start();
		$_SESSION['user'] = $user;
	}

	static public function dell(): void
	{
		session_start();
		session_destroy();
	}

	static public function check(): array|bool
	{
		session_start();
		if (isset($_SESSION['user'])){
			return $_SESSION['user'];
		}

		return false;
	}
}