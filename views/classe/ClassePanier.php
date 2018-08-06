<?php
class Panier
{	
	private $_BDD;

	function __construct($bdd)
	{
		if(!isset($_SESSION))
			session_start();

		if(!isset($_SESSION['panier']))
			$_SESSION['panier'] = array();

		$this->_BDD = $bdd;
	}

	private function total()
	{
		$total = 0;
		$tab_keys = array_keys($_SESSION['panier']);
		$mes_articles = $this->_BDD->query('SELECT id_article, prix_unitaire FROM article WHERE id_article IN ('.implode(',', $tab_keys).')');
		foreach ($mes_articles as $article)
		{
			$total += $article->prix_unitaire * $_SESSION['panier'][$article->id_article];
		}
		$_SESSION['prix_total'] = $total;
	}

	public function count()
	{
		return array_sum($_SESSION['panier']);
	}

	public function add($article_id)
	{
		if(isset($_SESSION['panier'][$article_id]))
			$_SESSION['panier'][$article_id]++;
		else
			$_SESSION['panier'][$article_id] = 1;

		$this->total();
	}

	public function del($article_id)
	{
		unset($_SESSION['panier'][$article_id]);
		$req = 'DELETE FROM `panier` WHERE `panier`.`id_article_selectionner` = ? AND id_user = ?';
		$id_del = array($article_id, $_SESSION['id']['id_user']);
		$this->_BDD->query($req, $id_del);
		$this->total();
	}

	public function ajoute($article_id)
	{
		$_SESSION['panier'][$article_id]++;
	}

	public function retire($article_id)
	{
		$_SESSION['panier'][$article_id]--;
	}

	private function getLastIdPanier()
	{
		$req = $this->_BDD->query('SELECT id_panier FROM panier ORDER BY id_panier DESC LIMIT 1');
		return ($req[0]->id_panier);
	}

	public function commande()
	{
		$last_id_panier = $this->getLastIdPanier() + 1;
		$tab_keys = array_keys($_SESSION['panier']);
		$mes_articles = $this->_BDD->query('SELECT * FROM article WHERE id_article IN ('.implode(',', $tab_keys).')');
		foreach ($mes_articles as $article) 
		{
			$ma_commande = array( $last_id_panier, $_SESSION['id']['id_user'] ,$article->id_article, $article->prix_unitaire, $_SESSION['panier'][$article->id_article]);
			$this->_BDD->query('INSERT INTO panier (id_panier ,id_user, id_article, prix_unitaire, quantite) VALUES (?,?,?,?,?)', $ma_commande);
			echo "ok";
			
		}
		$this->validationCommande($last_id_panier);
	}

	public function validationCommande($id_panier)
	{
		$frait_port = 5.99;
		$ma_commande = array($id_panier, $_SESSION['id']['id_user'], $_SESSION['prix_total'] + $frait_port);
		$this->_BDD->query('INSERT INTO commande_valide (id_panier, id_user, prix_total) VALUES (?,?,?)', $ma_commande);
		echo 'commande validé';
	}

}
?>