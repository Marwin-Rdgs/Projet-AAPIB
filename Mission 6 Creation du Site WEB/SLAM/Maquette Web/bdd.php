<?php     
$bdd = new PDO("mysql:host=localhost; dbname=projet_aapib; charset=utf8", "root", '');

//============================ Partie Article =========================================
$requeteSQL = "SELECT * FROM article";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$menu = $requete->fetchAll(PDO ::FETCH_ASSOC);


//============================ Partie Users =========================================

// SEULEMENT SI LA PERSONNE EST CONNECTE (donc si le id n'est pas vide)
 //   $requeteSQL = 'SELECT * FROM users Where id = ?';
 //   $requete = $bdd ->prepare($requeteSQL);
 //   $requete->execute(array($_GET['id']));
 //   $user = $requete->fetch(PDO ::FETCH_ASSOC);


 //============================ Partie Like =========================================
 $requeteSQL = 'SELECT COUNT(jaime) FROM avis_article WHERE jaime = TRUE';
 $requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$like = $requete->fetchAll(PDO ::FETCH_ASSOC);
