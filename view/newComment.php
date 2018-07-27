<?php
session_start();
require('../controller/controllerComment.php');


if (isset($_POST['valider'])) {
    
    if (empty($_POST['authorComment']) || empty($_POST['content'])) {
        echo "Impossible d'envoyer votre commentaire.";
        echo '<br /><a href="completeArticles.php?id='.$_GET['id'].'">Retour à l\'article</a>';
        return;
    }
    newComment($_GET['id'], $_POST['authorComment'], $_POST['content']);
    header('Location: completeArticles.php?id='.$_GET['id']);
} else {
    header('Location: completeArticles.php?id='.$_GET['id']);
}
?>