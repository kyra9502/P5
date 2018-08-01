<?php
require_once('../model/Comment.php');
use P5\Model as database;

function listComments()
{
    $Comment = new database\Comment();
    $listComments = $Comment->listComments();

    return $listComments;
}

