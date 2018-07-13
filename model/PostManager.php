<?php

namespace P5\Model;
// Call BDD
require_once ("../model/Manager.php");

class PostManager extends Manager
{
	

	public function listArticles()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, title, edit_date, edit_author, content, image FROM post ORDER BY edit_date DESC");
        $req->execute();
        $articles = $req->fetchAll();

        return $articles;
    }
}

?>