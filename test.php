<?php
// On crée une pile d'autoload avec le spl_autoload

spl_autoload_register('requireClass');
include 'settings.php';
// On crée une fonction pour faire les require de Classe

function requireClass($classe){
    require $classe . '.php';
}

$pdo = 	$bdd = new PDO($host.';dbname=testblog;charset=utf8', $user, $password);

$pdoStat = $pdo->query('SELECT * FROM billet');
$donnees = $pdoStat->fetch();
$billet = new BlogManager($donnees);
// $pdoStat->setFetchMode(PDO::FETCH_CLASS,'billet');
var_dump($donnees);
// Chaque entrée sera récupérée et placée dans un objet
 while ($donnees = $pdoStat->fetch()){
  $billet->displayBillet();
 }
$pdoStat->closeCursor();


// $pdo = 	$bdd = new PDO($host.';dbname=testblog;charset=utf8', $user, $password);
// $pdoStat = $pdo->query('SELECT * FROM commentaire');
// $donnees = $pdoStat->fetch();

// $commentaire = new Commentaire($donnees);
// var_dump($commentaire);
// $commentaire->displayCom();
