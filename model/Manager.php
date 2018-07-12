<?php

namespace P5\Model;

//Connect to database

class Manager
{
	protected function dbConnect()
	{
		$db = new \ PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
		return $db;
	}
}

?>