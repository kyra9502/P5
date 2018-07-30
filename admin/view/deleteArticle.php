<?php
session_start();
require("../controller/controllerArticle.php");

deleteArticle($_GET['id']);
header('Location : articles.php');