<?php

use P5\Model as database;
// Call BDD
require_once ("../model/Manager.php");

class PostManager extends Manager
{
	public function getOrderPost()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, post_date, content FROM post ORDER BY post_date DESC LIMIT 0, 3');
		$post = $req->fetch();

		return $post;
	}
}

?>