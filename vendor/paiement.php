<?php
require 'autoload.php';
require '../classe/include_all_classe.php';

$ids = require 'paypal.php';
// Création des nouveaux objet fournit par la librairie SDK de php paypal avec les redirection d'url nécéssaire aprés le paiement
//création du contexte de l'api paypal avec l'id et le passe donné par paypal
$apiContext = new \PayPal\Rest\ApiContext(
new \PayPal\Auth\OAuthTokenCredential(
		$ids['id'],
		$ids['secret']
	)
);


// création de la liste des articles contenu dans le panier
$list = new \PayPal\Api\ItemList();

$tab_keys = array_keys($_SESSION['panier']);
$mes_articles = $BDD->query('SELECT * FROM article WHERE id_article IN ('.implode(',', $tab_keys).')');

foreach ($mes_articles as $article)
{
	$item = (new \PayPal\Api\Item()) // nouvel objet item pour chaque article sélectioner dans mon panier avec les info nécéssaire
		->setName($article->nom_produit)
		->setPrice($article->prix_unitaire)
		->setCurrency('EUR')
		->setQuantity($_SESSION['panier'][$article->id_article]);

	$list->addItem($item); //ajout de chaque item dans la list demandé pas paypal
}

$shipping = (new \PayPal\Api\ShippingCost())
	->setAmount(5.99);

// détails de paiement
$details = (new \PayPal\Api\Details())
	->setShipping($shipping->getAmount())
	->setSubtotal($_SESSION['prix_total']);


// définition du prix a payer
$amount = (new \PayPal\Api\Amount())
	->setTotal($_SESSION['prix_total'] + $shipping->getAmount())
	->setCurrency("EUR")
	->setDetails($details);

// création de la transaction
$transaction = (new \PayPal\Api\Transaction())
	->setItemList($list) //passage de la liste d'article créé au dessu a l'objet transaction
	->setDescription('Achat sur le site mes huiles essentiel')
	->setAmount($amount)
	->setCustom($_SESSION['id']['user_passwd']); // pour passer des variables personaliser , comme par exemple l'id de la commande que je pourais récuperer aprés le paiement

//Création d'un nouvel objet de paiement
$paiement = new \PayPal\Api\Payment();
$paiement->setTransactions([$transaction]);
$paiement->setIntent('sale');

$redirectUrls = (new \PayPal\Api\RedirectUrls())
	->setReturnUrl('http://localhost/e_commerce/vendor/pay.php')
	->setCancelUrl('http://localhost/e_commerce/index.php');

$paiement->setRedirectUrls($redirectUrls);
$paiement->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal')); // méthode de paiement



try {
	$paiement->create($apiContext);
	header('Location:'.$paiement->getApprovalLink());
} 
catch (\PayPal\Exception\PayPalConnectionException $e) {
	var_dump(json_decode($e->getData()));
}


