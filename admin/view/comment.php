<?php
session_start();

require("../controller/controllerArticle.php");
require("../controller/controllerComment.php");
include("../view/header.php");

$articles = listArticles();
$listComments = listComments();



?>

<section class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"></br>
                    <h2>Commentaires :</h2>
                    <hr class="star-primary">
                </div>
            </div>
        </div>
</section>
<?php

foreach ($articles as $article) :
    $shortContent = substr($article['content'], 0, 250);
    $id = $article['id'];
    ?>

    <!-- Blog Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <h1><?= isset($article['title'])? htmlspecialchars($article['title']) :'title' ?></h1>
                </div>
               
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p><?= isset($article['content'])? nl2br($shortContent).'...'.' ' : 'void'?></p>
                </div>
            <div class="row">
                <div class="col-lg-12">
                	<h3><u>Commentaires de l'article :</u></h3>
                	<?php
        		
        		foreach ($listComments as $comment) : ?><?= isset($comment['id'])? 'commentaire n°'.$comment['id'] : '' ?> par <?= isset($comment['author'])? $comment['author'] : '' ?>
                </br><?= isset($comment['content'])? htmlspecialchars($comment['content']): ''?></br>
                <a href="authorizedComment.php?id=<?= $comment['id']?>">Valider</a> /
                <a href="deleteComment.php?id=<?= $comment['id']?>">Effacer</a>
                </br>
                <p>___________</p><?php endforeach; ?>
                </div>
            </div>


            
            
             
        </div>
    </section>
<?php endforeach; ?>
 

<?php
include("../view/footer.php");
?>
