<?php
require_once('../model/PostManager.php');
use P5\Model as database;



function listArticles()
{
    $postManager = new database\PostManager();
    $listArticles = $postManager->listArticles();

    return $listArticles;
}

function completeArticles($idArticle)
{
	$postManager = new database \PostManager();
	$article = $postManager->completeArticles($idArticle);

	return $article;
}

function listComments($idArticle)
{
	$postManager = new database \PostManager();
	$comments = $postManager->listComments($idArticle);

	return $comments;
}













?>