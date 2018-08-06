<?php
require '../classe/include_all_classe.php';
$json = array('error' => true);
if(isset($_GET['id']) && !empty($_GET['id']))
{
	$id = htmlspecialchars($_GET['id']);
	$article = $BDD->query('SELECT id_article FROM article WHERE id_article = ?', array($id));
	if(empty($article))
		$json['message'] = "Ce produits n'existe pas !";

	$panier->add($article[0]->id_article);
	$json['error'] = false;
	$json['message'] = "Le produit a bien été ajouté à votre panier ! ";
	$json['count'] = $panier->count();
	$json['total'] = $_SESSION['prix_total'];
}
else
	$json['message'] = 'Vous n\'avez pas sélectionné de produit à ajouter au panier';

echo json_encode($json);
?>