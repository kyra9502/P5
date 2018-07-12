<?php
use P5\Model as database;

function listPost()
{
	$postManager = new database\PostManager();
	$post = $postManager->getOrderPost();

	return $post;
}














?>