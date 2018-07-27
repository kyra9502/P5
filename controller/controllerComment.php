<?php
require_once('../model/Comment.php');
use P5\Model as database;

function listComments($idArticle)
{
	$Comment = new database \Comment();
	$comments = $Comment->listComments($idArticle);

	return $comments;
}

function newComment($idArticle, $authorComment, $content)
{
    $Comment = new database\Comment();
    $newComment = $Comment->postComment($idArticle, $authorComment, $content);

    if ($newComment === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
}