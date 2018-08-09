<?php
session_start();
require('../controller/controllerArticle.php');


if (isset($_POST['valider'])) {
    
    if (empty($_POST['title']) || empty($_POST['authorArticle']) || empty($_POST['content'])) {
        echo "Impossible d'envoyer l'article.";
        
        return;
    }
    newArticle($_POST['title'], $_POST['authorArticle'], $_POST['content']);
    header('Location: articles.php');
} else {
    header('Location: articles.php');
}
?>