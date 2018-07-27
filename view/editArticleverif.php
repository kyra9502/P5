
<?php
session_start();
require('../controller/controllerArticle.php');

// Security Edit Article Form
if (isset($_POST['secureArticle'])) {
    if (empty($_SESSION['secureArticle'])) {
        echo "Une erreur s'est produite.";
        return;
    }
    if ($_SESSION['secureArticle'] !== $_POST['secureArticle']) {
        echo "Une erreur s'est produite.";
        return;
    }
    if (empty($_POST['articleTitle']) || empty($_POST['articleContent'])) {
        echo "Tous les champs ne sont pas remplis !.";
        return;
    }
    updateArticle($_POST['articleTitle'], $_POST['articleContent'],$_POST['updateAuthor'], $_GET['id']);
    $_SESSION['updateMessage'] = "L'article numéro ".$_GET['id']." a bien été mis à jour.";
    header('Location: editArticle.php?id='.$_GET['id']);

} else {
    header('Location: editArticle.php?id='.$_GET['id']);
}
