<?php
session_start();

require('../controller/controller.php');
include('../view/header.php');

if (!isset($_GET['id']) || $_GET['id'] <= 0) {
    echo "Cet article n'existe pas.";
    return;
}
$article = completeArticles($_GET['id']);
$comments = listComments($_GET['id']);
?>

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2><?= isset($article['title'])? htmlspecialchars($article['title']) :'titre' ?></h2>
            </div>
            <p class="text-center">Publié le <?= isset($article['post_date'])? $article['post_date']: '' ?> par <?= isset($article['edit_author'])? $article['edit_author'] : '' ?> </p>
            <p class="text-center"><?= isset($article['edit_date'])? 'Dernère modification le '.$article['edit_date']: '' ?></p>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p><?= isset($article['content'])? nl2br($article['content']) : 'void' ?></p>
                <p><?= isset($_SESSION['validated'])? ($_SESSION['validated'] === 1 ? '<a class="btn btn-success btn-lg" href="editArticle.php?id='.$article['id'].'">Modifier</a>' :  '') : '' ?></p>
            </div>
            
        </div>
        <div class="col-lg-12 text-center">
                <p><img src='../img/'<?= isset($article['image'])? $article['image'] :'void'?> ?></img></p>
        </div>
        <div class="col-lg-12">
                <p><?= '<a class="btn btn-success btn-lg" href="editArticle.php?id='.$article['id'].'">Modifier l\'article</a>'  ?></p>
        </div>
        <div class="row">
        	<div class="col-lg-12"><h4>Commentaires :</h4>
        		<?php
        		// display valide comments
        		foreach ($comments as $comment) :
        			if ($comment['authorized'] == 1)
        			{
        		?>
        				<p class="col-md-12">Le <?=isset($comment['comment_date'])? $comment['comment_date'] : '' ?> par <?=isset($comment['author']) ? htmlspecialchars($comment['author']):'' ?></p>
        				<p class="col-md-12"><?= isset($comment['content'])? htmlspecialchars($comment['content']) :'' ?></p>
        			<?php
                    }
                endforeach; 
                	?>
            </div>
		</div>
	 </div>

</section>
<section class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"></br>
                    <h3>Ajouter un commentaire</h3>
                    <hr class="star-primary">
                </div>
                //Form
            </div>
        </div>
</section>

<?php
include("../view/footer.php");
?>
