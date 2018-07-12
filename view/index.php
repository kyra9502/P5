<?php

session_start();
require('../controller/controller.php');
include('../view/header.php');

$post = listPost();
?>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="../img/moi2.png" alt="">
                <div class="intro-text">
                    <span class="name">Développeur PHP / Symfony</span>
                    <hr class="star-primary">
                    <span class="skills">La développeuse qu'il vous faut !</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Blog Section -->