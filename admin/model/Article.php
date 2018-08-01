<?php

namespace P5\Model;
// Call BDD
require_once ("../model/Manager.php");

class Article extends Manager
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
        $req = $db->prepare("SELECT id, user_id, title,image, content, edit_author, DATE_FORMAT(post_date, '%d-%m-%Y à %Hh%i') AS post_date, DATE_FORMAT(edit_date, '%d-%m-%Y à %Hh%i') AS edit_date FROM post WHERE id = ?");
        $req->execute(array($idArticle));
        $article = $req->fetch();

        return $article;
    } 

    public function updateArticle($updateTitle, $updateContent, $updateAuthor, $idArticle)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("UPDATE post SET title = :title, content = :content, edit_author = :edit_author, edit_date = NOW() WHERE id = :id");
        $req->execute([
            "title"=> $updateTitle,
            "content"=>$updateContent,
            "edit_author"=>$updateAuthor,
            "id"=>$idArticle

            ] );
    }

    public function deleteArticle($idArticle)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("DELETE FROM post WHERE id = ?");
        $deleteArticle=$req->execute(array($idArticle));

        return $deleteArticle;
    }

    public function getAuthor($idArticle)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT post.user_id, post.id, user.username FROM post RIGHT JOIN user ON post.user_id = user.id WHERE post.id = ?");
        $req->execute(array($idArticle));
        $author = $req->fetch();

        return $author;
    }

    public function postArticle($title, $authorArticle, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO post (title, content, post_date,edit_author) VALUES(?,?,NOW(), ?)');
        $newArticle=$req->execute(array($title, $authorArticle, $content));

        return $newArticle;
    }


}

?>