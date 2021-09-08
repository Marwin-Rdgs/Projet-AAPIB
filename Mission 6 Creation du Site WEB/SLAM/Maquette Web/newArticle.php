<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require'style.php' ?>
    <title>Présentation - AAPIB</title>

</head>

<body class="bg-primary">

<header>
<?php require'nav.php' ?>

<?php require'header.php' ?>

</header>

<main class="container">

<h1 class="bg-info text-center mt-5"> Création d'un Article </h1>

<form>
  <fieldset>
       <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Titre de l'Article</label>
      <input class="form-control" placeholder="Entez son Titre">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Contenu de l'Article</label>
      <input class="form-control" placeholder="Entez son contenu">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Image de l'Article</label>
      <input class="form-control" placeholder="Entrez l'image de l'Article (liens)">
    </div>
    <a href="#"> <button type="submit" class="btn btn-info mt-2">Envoyer</button> </a>
  </fieldset>
</form>

</main>

<footer>

<?php require 'footer.php' ?>

</footer