
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require 'style.php' ?>
    <title>Formulaire ~ AAPIB</title>

</head>

<body>

<header>

<?php require'nav.php' ?>

</header>

<main class="mt-5 container">


<div class="row-1">

<form>
  <fieldset>
    <legend class="bg-dark text-center">Connexion</legend>
       <div class="form-group col-2">
      <label for="exampleInputEmail1" class="form-label mt-4">Prénom</label>
      <input class="form-control" placeholder="Entez votre Prénom">
    </div>
    <div class="form-group col-2">
      <label for="exampleInputEmail1" class="form-label mt-4">Nom</label>
      <input class="form-control" placeholder="Entez votre Nom">
    </div>
    <div class="form-group col-2">
      <label for="exampleInputPassword1" class="form-label mt-4">Mot de Passe</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre Mot de Passe">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Se Connecter</button>
  </fieldset>
</form>

<form>
  <fieldset>
    <legend class="bg-dark mt-3 text-center">S'Inscrire</legend>
       <div class="form-group col-2">
      <label for="exampleInputEmail1" class="form-label mt-4">Prénom</label>
      <input class="form-control" placeholder="Entez votre Prénom">
    </div>
    <div class="form-group col-2">
      <label for="exampleInputEmail1" class="form-label mt-4">Nom</label>
      <input class="form-control" placeholder="Entez votre Nom">
    </div>
    <div class="form-group col-2">
      <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entez votre e-mail">
    </div>
    <div class="form-group col-2">
      <label for="exampleInputPassword1" class="form-label mt-4">Mot de Passe</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre Mot de Passe">
    </div>
    <div class="form-group col-2">
      <input type="password" class="form-control mt-1" id="exampleInputPassword1" placeholder="Repêtez votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary mt-2">S'inscrire</button>
  </fieldset>
</form>

<div>

</main>

</br>


<footer>

<?php require 'footer.php' ?>

</footer>




    
</body>
</html>