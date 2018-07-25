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

function updateArticle($updateTitle, $updateContent, $idArticle, $updateAuthor)
{
	$postManager = new database \PostManager();
	$updateArticle = $postManager->updateArticle($updateTitle, $updateContent, $idArticle, $updateAuthor);
	if($updateArticle === false)
	{
		throw new exception("Impossible de modifier l'article !");
	}
}

function deleteArticle($idArticle)
{
	$postManager = new database \PostManager();
	$deleteArticle = $postManager->deleteArticle($idArticle);
	if($deleteArticle === false)
	{
		throw new exception("Impossible de supprimer l'article !");
	}
}

function getAuthor($idArticle)
{
    $postManager = new database\PostManager();
    $author = $postManager->getAuthor($idArticle);

    return $author;
}

function newComment($idArticle, $authorComment, $content)
{
    $postManager = new database\PostManager();
    $newComment = $postManager->postComment($idArticle, $authorComment, $content);

    if ($newComment === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
}










?>