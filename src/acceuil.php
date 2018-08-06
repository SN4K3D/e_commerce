<?php 
require ('../classe/include_all_classe.php');
$mes_articles = $BDD->query('SELECT * FROM article');
include('../views/acceuil.view.php');
?>