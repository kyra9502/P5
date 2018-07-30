<?php
session_start();

require("../controller/controllerArticle.php");
include("../view/header.php");

$articles = listArticles();


?>

<section class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"></br>
                    <h2>Articles</h2>
                    <hr class="star-primary">
                  </div>
            </div>
        </div>
</section>

<section id="portfolio">
        <div class="container">
            <div class="row">
                <h3><a href="newArticle.php">Ecrire un nouvel article</a></h3>
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
                <div class="col-lg-12 text-center">
                    <h1><?= isset($article['title'])? htmlspecialchars($article['title']) :'title' ?></h1>
                </div>
               <p class="text-center"><?= isset($article['edit_date'])? 'Dernière modification le '.$article['edit_date'].' par ' : '' ?>
               	<?= isset($article['edit_author'])? $article['edit_author'] : '' ?> </p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p><?= isset($article['content'])? nl2br($shortContent):''?></p>
                </div>
                <div class="col-lg-12">
                    <p><?= '<a class="btn btn-success btn-lg" href="editArticle.php?id='.$article['id'].'">Modifier l\'article</a>'  ?></p>
               </div>
               <div class="col-lg-12">
                    <p><?= '<a class="btn btn-success btn-lg" href="deleteArticle.php?id='.$article['id'].'">Supprimer l\'article</a>'  ?></p>
               </div>
          </div>
    </section>
<?php endforeach; ?>
 

<?php
include("../view/footer.php");
?>
