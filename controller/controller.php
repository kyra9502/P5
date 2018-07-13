<?php
require_once('../model/PostManager.php');
use P5\Model as database;



function listArticles()
{
    $postManager = new database\PostManager();
    $listArticles = $postManager->listArticles();

    return $listArticles;
}














?>