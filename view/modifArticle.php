
<?php
session_start();
require('../controller/controllerArticle.php');


if (isset($_POST['valider'])) {
   
    
    if (empty($_POST['articleTitle']) || empty($_POST['articleContent'])) {
        echo "Tous les champs ne sont pas remplis !.";
        return;
    }
    updateArticle($_POST['articleTitle'], $_POST['articleContent'],$_POST['updateAuthor'], $_GET['id']);
    $_SESSION['updateMessage'] = "L'article a bien été modifié.";
    header('Location: editArticle.php?id='.$_GET['id']);

} else {
    header('Location: editArticle.php?id='.$_GET['id']);
}
