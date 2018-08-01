<?php

namespace P5\Model;
// Call BDD
require_once ("../model/Manager.php");

class Comment extends Manager
{

	 public function listComments()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT id, author, content, comment_date FROM comment WHERE authorized = 0 ORDER BY id ASC");
        $req->execute();
        $listComments = $req->fetchAll();

        return $listComments;
    }

    




}
?>