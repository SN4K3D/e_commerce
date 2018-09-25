<?php
require '../classe/include_all_classe.php';
require 'autoload.php';
$ids = require 'paypal.php';

if(isset($_SESSION['id'], $_SESSION['prix_total'], $_GET['paymentId'], $_GET['PayerID'] ) AND !empty($_SESSION['id']) && !empty($_SESSION['prix_total']))
{
	$paymentId = htmlspecialchars($_GET['paymentId']);
	$PayerID = htmlspecialchars($_GET['PayerID']);

	$apiContext = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
			$ids['id'],
			$ids['secret']
		)
	);

	// récupération des information de paiement envoyer en GET par paypal
	$paiement = \PayPal\Api\Payment::get($paymentId, $apiContext);
	echo "<br><br><br>";
	$qq = 1;
	if($paiement->getTransactions()[0]->getCustom() === $_SESSION['id']['user_passwd'] AND $paiement->getTransactions()[0]->getAmount()->getTotal() == ($_SESSION['prix_total'] + 5.99))
	{
		// Validation du paiement
		$execution = (new \PayPal\Api\PaymentExecution())
			->setPayerId($PayerID)
			->setTransactions($paiement->getTransactions());

		try {
			$paiement->execute($execution, $apiContext);
			if($paiement->getState() === 'approved')
			{
				$panier->validationCommande($paiement);
				$_SESSION['panier'] = NULL;
				$_SESSION['prix_total'] = NULL;
				include '../views/validation_commande.view.php';
			}
			else
				echo "Probleme de paiement a l'exec";

		} catch (\PayPal\Exception\PayPalConnectionException $e) {
			var_dump(json_decode($e->getData()));
		}
	}
	else
	{ 
		echo "Probleme de paiement".'<br>'.$paiement->getTransactions()[0]->getAmount()->getTotal().'<br>'.($_SESSION['prix_total'] + 5.99).'<br>'.$paiement->getTransactions()[0]->getCustom().'<br>'.$_SESSION['id']['user_passwd'];	
	}
}
else
	echo "Probleme de connexion, vous n'etes plus connecter au site !";

?>