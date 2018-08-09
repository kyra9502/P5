<?php
session_start();

include('../view/header.php');
?>

<section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"></br></br>
                    <h2>Connexion</h2>
                    <hr class="star-primary">
                </div>
                <div class="row">
	                <div class="img-responsive text-center portfolio-item">
	                    <a href="login.php#se_connecter">
	                        <img src="../img/connexion.jpg"  alt="">
	                        </a>
	                </div>
                </div>
            </div>
 </section>

<section id="se_connecter"class="success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <form method="post" action="dashboard.php">
                	<p>Adresse email : <input type="text" name="email"/></p></br>
                	<p>Mot de passe : <input type="password" name="m2p"/></p></br>
                	<input type="submit" name="valider" value="Se connecter"/>
                 </form></br><hr>
                 <form method="post" action="newUser.php">
                    <p>Créer un compte</p>
                    <input type="submit" name="valider" value="Nouveau"/>
                 </form>
            </div>
        </div>
    </div>
</section>






<?php
include("../view/footer.php");
?>