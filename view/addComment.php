<?php
session_start();
require('../controller/controllerComment.php');

/**
* Security for Comment Form, adding Comment
*
 */
if (isset($_POST['blackIce'])) {
    if (empty($_SESSION['blackIce'])) {
        echo "Une erreur s'est produite.";
        echo '<br /><a href="completeArticles.php?id='.$_GET['id'].'">Retour à l\'article</a>';
        return;
    }
    if ($_SESSION['blackIce'] !== $_POST['blackIce']) {
        echo "Une erreur s'est produite lors de l'envoi de votre commentaire.";
        echo '<br /><a href="completeArticles.php?id='.$_GET['id'].'">Retour à l\'article</a>';
        return;
    }
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
