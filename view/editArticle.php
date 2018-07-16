<?php
session_start();

require('../controller/controller.php');
include("../view/header.php");
$article = completeArticles($_GET['id']);
$articles =  updateArticle($updateTitle, $updateContent, $idArticle, $updateAuthor);


?>


<section class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"></br>
                    <h2><p class="text-center"><?= isset($article['title'])? "Modification de l'article ".$article['title']: '' ?></p></h2>
                    <hr class="star-primary">
                </div>
                <section id="portfolio">
			        <div class="container">
			            <div class="row">
			                <form method="post" class="text-center form-group" action="completeArticles.php?id=<?= $_GET['id'] ?>" method="post">
			                    <p style="color: green"><?= isset($_SESSION['updateMessage'])? $_SESSION['updateMessage'] : "" ?></p>
			                    <div>
			                        <label for="title">Titre</label><br />
			                        <input type="text" id="updateTitle" name="articleTitle" size="50" value="<?= isset($articles['title'])? htmlspecialchars($articles['title']) :'titre' ?>" />
			                    </div></br>
			                    <div>
			                        <label for="author">Auteur</label><br />
			                        <input type="text" id="updateAuthor" name="updateAuthor" value="<?= isset($articles['edit_author'])? htmlspecialchars($articles['edit_author']) :'auteur' ?>" />
			                        <p style="font-size: 1em">Edité par <?= isset($articles['edit_author'])? $articles['edit_author'] : '' ?> </p>
			                    <div>
			                        <br/><label for="content">Contenu</label><br />
			                        <textarea id="articleContent" class="form-control" name="articleContent" rows="10"><?= isset($articles['content'])? nl2br(htmlentities($articles['content'])) : 'void' ?></textarea>
			                    </div></br>
			                    <div>
			                        <input type="submit" />
			                        <input type="hidden" name="whiteIce" id="whiteIce" value="<?php echo $_SESSION['whiteIce']; ?>" />
			                    </div>
			                </form>
			            </div>
			        </div>
			    </section>
</section>

<?php
include("../view/footer.php");
?>