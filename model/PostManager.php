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

    public function completeArticles($idArticle)
    {
    	$db = $this->dbConnect();
        $req = $db->prepare("SELECT id, user_id, title, content, edit_author, DATE_FORMAT(post_date, '%d-%m-%Y à %Hh%i') AS post_date, DATE_FORMAT(edit_date, '%d-%m-%Y à %Hh%i') AS edit_date FROM post WHERE id = ?");
        $req->execute(array($idArticle));
        $article = $req->fetch();

        return $article;
    } 

    public function listComments($idArticle)
    {
    	$db = $this->dbConnect();
    	$req = $db->prepare("SELECT post_id, author, content, DATE_FORMAT(comment_date, '%d-%m-%Y à %Hh%i') AS comment_date, authorized  FROM comment WHERE post_id=? ORDER BY comment_date ASC");
    	$req->execute(array($idArticle));
    	$comments = $req->fetchAll();

    	return $comments;
    }


}

?>