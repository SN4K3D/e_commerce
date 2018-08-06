<?php
require ('../classe/include_all_classe.php');
if(!isset($_SESSION['id']))
{
	if(isset($_POST['form_inscription']))
	{			
				$prenom = htmlspecialchars($_POST['prenom']);
				$anniversaire = htmlspecialchars($_POST['anniversaire']);
				$pays =	htmlspecialchars($_POST['pays']);
				$ville = htmlspecialchars($_POST['ville']);
				$cp = htmlspecialchars($_POST['cp']);
				$adresse = htmlspecialchars($_POST['adresse']);
				$nom = htmlspecialchars($_POST['nom']);
				$pseudo = htmlspecialchars($_POST['pseudo']);
				$mail = htmlspecialchars($_POST['mail']);
				$mail2 = htmlspecialchars($_POST['mail2']);
				$mdp1 = htmlspecialchars($_POST['password']);
				$mdp2 = htmlspecialchars($_POST['password2']);
				$hobby = '';

		if(!empty($_POST['civilite'])  && !empty($_POST['prenom']) &&!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['nom']) && !empty($_POST['adresse']) && !empty($_POST['cp']) && !empty($_POST['ville']) && !empty($_POST['pays']) && !empty($_POST['anniversaire']))
			{
				$civilite = htmlspecialchars($_POST['civilite']);
				if(strlen($pseudo) <= 25)
				{
					if(strlen($prenom) <= 25)
					{
						if($civilite === 'Homme' || $civilite === 'Femme')
						{
							if(strlen($mail) <= 50 && strlen($mail2) <= 50)
							{
								if(strlen($mdp1) <= 25 && strlen($mdp2) <= 25)
								{
									if($pays === 'France' || $pays === 'Belgique' || $pays === 'Suisse')
									{
										if(strlen($cp) <= 5)
										{
											if(strlen($ville) <= 25)
											{
												if(strlen($adresse) <= 60)
												{
													if(strlen($anniversaire) == 10)
													{
														if(strlen($mail) <= 30 && strlen($mail2) <= 30)
														{
															if(filter_var($mail, FILTER_VALIDATE_EMAIL))
															{
																if($mail == $mail2)
																{
																	if(isset($_POST['interets']))
																	{
																		foreach($_POST['interets'] as $valeur)
																		{
																			$valeur = htmlspecialchars($valeur);
																			$hobby .= $valeur.' ';
																		}
																	}

																	require('../include/connexion_bdd.php');
																	$req_mail = $bdd->prepare("SELECT * FROM user WHERE mail_user = ? OR pseudo = ?");
																	$req_mail->execute(array($mail,$pseudo));
																	$mail_exist = $req_mail->rowCount();
																	if($mail_exist == 0)
																	{				
																		if($mdp1 == $mdp2)
																		{
																			$password = hash('sha256', $mdp1);
																			$inscription_user = $bdd->prepare("INSERT INTO user(pseudo, mail_user, user_passwd, nom, prenom, adresse, code_postal, pays, ville, civilite, hobby, anniversaire) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
																			$inscription_user->execute(array($pseudo, $mail, $password, $nom, $prenom, $adresse, $cp, $pays, $ville, $civilite, $hobby, $anniversaire));
																			$validate = "Votre compte a bien été créé !";
																		}
																		else
																			$erreur = "Vos mots de passes ne correspondent pas !";
																	}
																	else
																		$erreur = "Cette adresse mail ou le pseudo existe déjà !";
																}
																else
																	$erreur = "Vos adesses mail ne correspondent pas !";
															}
															else
																$erreur = "Votre adresse mail est invalide !";
														}
														else
															$erreur = 'Votre adresse mail est trop grande !';
													}
													else
														$erreur = 'Votre date de naissance est trop longue !';
												}
												else
													$erreur = 'Votre adresse est trop longue !';
											}
											else
												$erreur = 'Votre nom de ville est trop grand !';
										}
										else
											$erreur = 'Votre code postal est trop long !';
									}
									else
										$erreur = "Votre pays ne correspond pas !";
								}
								else $erreur = "Votre mot de passe est trop long !";
							}
							else
								$erreur = "Votre mail ne doit pas dépasser 100 caractères !";
						}
						else
							$erreur = "Vous devez choisir une civilité !";
					}
					else
						$erreur = "Votre prénom ne doit pas dépasser 25 caractères !";
				}
				else
					$erreur = "Votre pseudo ne doit pas dépasser 25 caractères !";
			}
			else
				$erreur = "Tous les champs douvent êtres complétés !";
	}
	include ("../views/inscription.view.php");
}
else
	echo 'Veuillez vous déconnecter avant de créé un nouveau compte !';
?>