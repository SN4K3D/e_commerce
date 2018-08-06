<?php
class Article 
{
	private $_id_article;
	private $_nom_produit;
	private $_type;
	private $_categorie;
	private $_prix_unitaire;
	private $_description;
	private $_bdd;

	function __construct($BDD, $id_article)
	{
		$this->_bdd = $BDD;
		$article = $this->_bdd->query('SELECT * FROM article WHERE id_article = ?',$id_article);
		$article = $article[0];
		if(!empty($article))
		{
			if(intval($article->prix_unitaire) && intval($article->id_article) AND $article->prix_unitaire > 0 && $article->id_article > 0)
			{
				$this->_prix_unitaire = number_format($article->prix_unitaire,2,',','');
				$this->_id_article = $article->id_article;
			}
			else 
			{
				trigger_error('l\'id article et le prix unitaire doivent etres des entier ! ', E_USER_WARNING);
				return;
			}
			if(is_string($article->type) && is_string($article->description) && is_string($article->nom_produit))
			{
				$this->_nom_produit = $article->nom_produit;
				$this->_type = $article->type;
				$this->_categorie = $article->categorie;
				$this->_description = $article->description;
			}
			else 
			{
				trigger_error('veuillez rentrer des chaine de carectère au endroit demandé  ! ', E_USER_WARNING);
				return;
			}
		}
	}

	public function set ($id, $value)
	{
		$_id = "_".$id;
		if(gettype($_id) == gettype($value))
		{
			$this->$_id = $value;
			if($this->_id == $value)
				return true;
			else
				return false;
		}
		else
		{
			trigger_error('le type de variable n\'est pas le meme !', E_USER_WARNING);
			return false;
		}
	}

	public function get ($id)
	{
		$_id = "_".$id;
		return $this->$_id;
	}

	public function hydrate(array $data)
	{
		foreach($data as $key => $value)
		{
			set($key,$value);
		}
	}
}
?>