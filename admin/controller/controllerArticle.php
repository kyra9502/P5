<?php
require_once('../model/Article.php');
use P5\Model as database;

function listArticles()
{
    $Article = new database\Article();
    $listArticles = $Article->listArticles();

    return $listArticles;
}

function completeArticles($idArticle)
{
	$Article = new database \Article();
	$article = $Article->completeArticles($idArticle);

	return $article;
}



function updateArticle($updateTitle, $updateContent, $idArticle, $updateAuthor)
{
	$Article = new database \Article();
	$updateArticle = $Article->updateArticle($updateTitle, $updateContent, $idArticle, $updateAuthor);
	if($updateArticle === false)
	{
		throw new exception("Impossible de modifier l'article !");
	}
}

function deleteArticle($idArticle)
{
	$Article = new database \Article();
	$deleteArticle = $Article->deleteArticle($idArticle);
	if($deleteArticle === false)
	{
		throw new exception("Impossible de supprimer l'article !");
	}
}

function getAuthor($idArticle)
{
    $Article = new database\Article();
    $author = $Article->getAuthor($idArticle);

    return $author;
}

function newArticle($title, $authorArticle, $content)
{
    $Article = new database\Article();
    $newArticle = $Article->postArticle($title, $authorArticle, $content);

    if ($newArticle === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
}

?>