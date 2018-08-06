<?php
require 'ClasseBdd.php';
require 'ClassePanier.php';
require 'ClasseArticle.php';
$BDD = new DB();
$panier = new Panier($BDD);
?>