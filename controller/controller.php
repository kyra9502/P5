<?php
require_once('../model/PostManager.php');
use P5\Model as database;

function listPost()
{
	$postManager = new database\PostManager(); //create object
	$post = $postManager->getOrderPost();

	return $post;
}














?>