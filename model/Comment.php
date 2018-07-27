<?php

namespace P5\Model;
// Call BDD
require_once ("../model/Manager.php");

class Comment extends Manager
{

	public function listComments($idArticle)
    {
    	$db = $this->dbConnect();
    	$req = $db->prepare("SELECT post_id, author, content, DATE_FORMAT(comment_date, '%d-%m-%Y à %Hh%i') AS comment_date, authorized  FROM comment WHERE post_id=? ORDER BY comment_date ASC");
    	$req->execute(array($idArticle));
    	$comments = $req->fetchAll();

    	return $comments;
    }

    public function postComment($idArticle, $authorComment, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO comment (post_id, author, content, comment_date, authorized) VALUES(?, ?, ?, NOW(), 0)');
        $newComment = $req->execute(array($idArticle, $authorComment, $content));

        return $newComment;
    }




}
?>