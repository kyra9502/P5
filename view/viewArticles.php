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
                    <p><?= isset($article['content'])? nl2br($shortContent).'...'.'
                    <a class="btn btn-success btn-lg" href="completeArticles.php?id='.$article['id'].'">Lire en entier</a>' : 'void' ?></p>
                </div>
            
            <div class="row">
                <div class="col-lg-12 text-center">
                        <?php isset($article['image']) ? $image= $article['image'] : $image= '' ?>
                     	<p><?php echo'<img src="../img/'.$image.'" class="img-responsive text-center""/>';?> </p>
                </div>
            </div>
             
        </div>
    </section>
<?php endforeach; ?>
 

<?php
include("../view/footer.php");
?>
