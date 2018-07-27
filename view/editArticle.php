<?php
session_start();

require('../controller/controllerArticle.php');
include("../view/header.php");
$article = completeArticles($_GET['id']);

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
			                <form method="post" class="text-center form-group" action="modifArticle.php?id=<?= $_GET['id'] ?>" method="post">
			                    <p style="color: green"><?= isset($_SESSION['updateMessage'])? $_SESSION['updateMessage'] : "" ?></p>
			                    <div>
			                        <label for="title">Titre</label><br />
			                        <input type="text" class="form-control" id="updateTitle" name="articleTitle" size="50" value="<?= isset($article['title'])? htmlspecialchars($article['title']) :'titre' ?>" />
			                    </div></br>
			                    <div>
			                        <label for="author">Auteur</label><br />
			                        <input type="text" class="form-control" id="updateAuthor" name="updateAuthor" value="<?= isset($author['username'])? htmlspecialchars($author['username']) :'auteur' ?>" />
			                        
			                    <div>
			                        <br/><label for="content">Contenu</label><br />
			                        <textarea id="articleContent" class="form-control" name="articleContent" rows="10"><?= isset($article['content'])? nl2br(htmlentities($article['content'])) : '' ?></textarea>
			                    </div></br>
			                    <div>
			                        <input type="submit" name ="valider" />
			                      </div>
			                    <div class="col-lg-12">
					                <p><?= '<a class="btn btn-success btn-lg" href="completeArticles.php?id='.$article['id'].'">Retour</a>'  ?></p>
					            </div>
			                </form>
			            </div>
			        </div>
			    </section>
</section>

<?php
unset($_SESSION['updateMessage']);
include("../view/footer.php");
?>