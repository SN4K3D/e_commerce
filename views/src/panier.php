<?php
require '../classe/include_all_classe.php';
if(isset($_GET['del']) && !empty($_GET['del']))
{
	$del_id = htmlspecialchars($_GET['del']);
	$del_id = intval($del_id);
	$panier->del($del_id);
}

$tab_keys = array_keys($_SESSION['panier']);
$mes_articles = $BDD->query('SELECT * FROM article WHERE id_article IN ('.implode(',', $tab_keys).')');
$frait_port = 5.99;

if(isset($_SESSION['prix_total']))
	$total =  $frait_port + $_SESSION['prix_total'];

include '../views/panier.view.php';
?>