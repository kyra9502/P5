<?php
session_start();
require('../controller/controllerArticle.php');
include('header.php');
?>

<section class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"></br>
                    <h3>Ajouter un article</h3>
                    <hr class="star-primary">
                </div>
                <div class="col-lq-12 newArticle">
                    <form method="post" class="text-center form-group" action="addNewArticle.php">
                    <div>
                        <label for="title">Titre</label><br />
                        <input type="text" class="form-control" id="title" name="title" />
                    </div></br>
                    <div>
                        <label for="author">Auteur</label><br />
                        <input type="text" class="form-control" id="authorArticle" name="authorArticle" />
                    </div></br>
                    <div>
                        <label for="content">Contenu</label><br />
                        <textarea id="content" class="form-control" name="content" rows="10"></textarea>
                    </div></br>
                    <div>
                        <input type="submit" name="valider" />
                        
                    </div>
                </form>
                </div>
            </div>
        </div>
</section>



<?php
include("../view/footer.php");
?>
