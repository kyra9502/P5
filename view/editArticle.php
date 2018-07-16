<?php
session_start();

require('../controller/controller.php');
include("../view/header.php");



?>


<section class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"></br>
                    <h2>Modification de l'article</h2>
                    <hr class="star-primary">
                </div>
                <section id="portfolio">
			        <div class="container">
			            <div class="row">
			                <form method="post" class="text-center form-group" action="modifArticle.php?id=<?= $_GET['id'] ?>" method="post">
			                    <p style="color: green"><?= isset($_SESSION['updateMessage'])? $_SESSION['updateMessage'] : "" ?></p>
			                    <div>
			                        <label for="title">Titre</label><br />
			                        <input type="text" id="updateTitle" name="articleTitle" size="50" value="<?= isset($article['title'])? htmlspecialchars($article['title']) :'titre' ?>" />
			                    </div></br>
			                    <div>
			                        <label for="author">Auteur</label><br />
			                        <input type="text" id="updateAuthor" name="updateAuthor" value="<?= isset($author['username'])? htmlspecialchars($author['username']) :'auteur' ?>" />
			                        <p style="font-size: 1em">Edité par <?= isset($article['edit_author'])? $article['edit_author'] : '' ?> </p>
			                    <div>
			                        <br/><label for="content">Contenu</label><br />
			                        <textarea id="articleContent" class="form-control" name="articleContent" rows="10"><?= isset($article['content'])? nl2br(htmlentities($article['content'])) : 'void' ?></textarea>
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