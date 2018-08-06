<?php
if(isset($_GET['id_article']) && !empty($_GET['id_article']) AND $_GET['id_article'] <= 8 && $_GET['id_article'] > 0 )
{
require '../classe/include_all_classe.php';

$id_article = htmlspecialchars($_GET['id_article']);
$id_article = intval($id_article);
$article = new Article($BDD, array($id_article));
include '../views/article.view.php';
}
else
	header('Location: acceuil.php');
?>