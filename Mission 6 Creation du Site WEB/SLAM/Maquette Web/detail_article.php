<?php
$bdd = new PDO("mysql:host=localhost:3306;dbname=projet_aapib;charset=utf8", "root", '');
$requeteSQL = 'SELECT * FROM article WHERE id = ?';
$requete = $bdd ->prepare($requeteSQL);
$requete->execute(array($_GET['id']));
$dtr = $requete->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require'style.php' ?>
    <title>Détail ~ Articles</title>
</head>

<body class="bg-primary">

<?php require 'nav.php'?>
<?php require 'header.php'?>

<main class="container">
    <h1 class="bg-info text-center text-light mt-3"> <?= $dtr["titre"] ?> </h1>
    <img src="<?= $dtr["img"] ?>">
    <h5 class="text-light"> <?= $dtr["date"] ?> </h5>
    <p class="text-light"> <?= $dtr["contenu"] ?> </p>

    <a href="modification.php?id=<?= $dtr["id"] ?>"> <button class="btn btn-info mt-2 mb-5 text-center">Modifier</button> </a>
    <a href="#"> <button class="btn btn-info mt-2 mb-5 text-center">Supprimer</button> </a>
    <!-- Faire selon l'ID et seulement si l'utilisateur est un membre de l'association -->



    <form>

    <fieldset class="form-group">
      <div class="form-check">
        <input class="form-check-input bg-dark" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Like
      </div>
    </fieldset>
    <fieldset>

  <fieldset>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Commentaire</label>
      <div class="col-sm-10">
        <input type="text" class="form-control-plaintext bg-light" id="staticEmail" value="blablablabla">
      </div>
    </div>

    <button type="submit" class="btn btn-info mt-2">Envoyer</button>    
</form>

<!-- Rajouter les commentaires déjà postés -->

</main>

<?php require 'footer.php'?>


</body>
</html>