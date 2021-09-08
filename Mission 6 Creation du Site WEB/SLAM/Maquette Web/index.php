<?php require'bdd.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require'style.php' ?>
    <title>Accueil - AAPIB</title>

</head>

<body class="bg-primary">

<header>
<?php require'nav.php' ?>

<?php require'header.php' ?>

</header>

<main class="container">

<h1 class="bg-info text-center mt-5"> Articles du moment </h1>

<div class="row mt-5">
                <?php
                    foreach  ($menu as $cards)
                    { ?>
                        <div class="col-6 col-lg-3">
                            <div class="card shadow">
                                <img src="<?= $cards["img"] ?>" class="card-img-top around" alt=". . .">
                                    <div class="card-body">
                                        <h6 class="card-title"> <?= $cards["titre"] ?> </h6>
                                            <a href=detail_article.php?id=<?= $cards["id"] ?> class="btn btn-primary d-block"> Voir plus </a>
                                    </div>
                            </div>
                        </div>
                     
                   <?php } ?>
            </div> 

<div class="mt-5">
<?php 
// Seulement pour les membre de l'association 
?>;
<a href="newArticle.php"><button class="btn btn-secondary container mt-5" type="submit">Ajouter Un Article</button> </a>
<!-- -->

</div>



</main>

<footer>

<?php require 'footer.php' ?>

</footer>

</body>

</html>