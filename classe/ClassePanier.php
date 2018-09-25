<?php
class Panier
{	
	private $_BDD;
	private $_id_panier;

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
		$req = $this->_BDD->query('SELECT id_panier FROM commande ORDER BY id_panier DESC LIMIT 1');
		return ($req[0]->id_panier);
	}

	public function getLastIdCommande()
	{
		$req = $this->_BDD->query('SELECT id_commande FROM commande_valide ORDER BY id_panier DESC LIMIT 1');
		return ($req[0]->id_commande);
	}

	public function commande()
	{
		$last_id_panier = $this->getLastIdPanier() + 1;
		$tab_keys = array_keys($_SESSION['panier']);
		$mes_articles = $this->_BDD->query('SELECT * FROM article WHERE id_article IN ('.implode(',', $tab_keys).')');
		foreach ($mes_articles as $article) 
		{
			$ma_commande = array( $last_id_panier, $_SESSION['id']['id_user'] ,$article->id_article, $article->prix_unitaire, $_SESSION['panier'][$article->id_article]);
			$this->_BDD->query('INSERT INTO commande (id_panier ,id_user, id_article, prix_unitaire, quantite) VALUES (?,?,?,?,?)', $ma_commande);			
		}
		$this->_id_panier = $last_id_panier;
	}

	public function validationCommande($paiement)
	{
		$id_panier = $this->getLastIdPanier();
		$frait_port = 5.99;
		$ma_commande = array($id_panier, $_SESSION['id']['id_user'], $_SESSION['prix_total'] + $frait_port, $paiement);
		$this->_BDD->query('INSERT INTO commande_valide (id_panier, id_user, prix_total, infos_paiement) VALUES (?,?,?,?)', $ma_commande);
	}

	public function loadPanier()
	{
		if(isset($_SESSION['id']) AND !empty($_SESSION['id']))
		{
			$req_panier = $this->_BDD->query('SELECT * FROM panier WHERE id_user = ?', array($_SESSION['id']['id_user']));
			if(!empty($req_panier))
			{
				foreach ($req_panier as $article) 
				{
					$_SESSION['panier'][$article->id_article] = $article->quantite;
				}
				$this->total();
				
			}
		}
	}

}
?>