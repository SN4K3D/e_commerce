<?php
require '../classe/include_all_classe.php';
if(isset($_SESSION['id']) AND !empty($_SESSION['id']))
{
	if(isset($_SESSION['panier']) AND !empty($_SESSION['panier']))
	{
		$id_panier = $panier->commande();
		header('Location: ../vendor/paiement.php?id_panier='.$id_panier);
	}
	//include '../views/commande.view.php';
}
else
{
	header('Location: connexion.php');

}
?>