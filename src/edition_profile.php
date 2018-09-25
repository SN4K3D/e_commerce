<?php
require ('../classe/include_all_classe.php');
if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{

	if(isset($_POST['form_edition']) && !empty($_POST['form_edition']))
		{
			if(isset($_POST['password_confirm']) AND !empty($_POST['password_confirm']))
			{
				require('../include/connexion_bdd.php');
				$pass_confirm = htmlspecialchars($_POST['password_confirm']);
				$pass_confirm = hash('sha256', $pass_confirm);
				
				if($pass_confirm == $_SESSION['id']['user_passwd'])
				{

					if(isset($_POST['new_pseudo']) && !empty($_POST['new_pseudo']) AND $_POST['new_pseudo'] != $_SESSION['id']['pseudo'])
					{
						$new_pseudo = htmlspecialchars($_POST['new_pseudo']);
						if(strlen($new_pseudo) <= 25)
						{
							$insert_pseudo = $bdd->prepare("UPDATE user SET pseudo = ? WHERE id_user = ?");
							$insert_pseudo->execute(array($new_pseudo, $_SESSION['id']['id_user']));
							header('Location: profile.php?id='.$_SESSION['id']['id_user']);
						}
						else
							$erreur = "Votre pseudo ne doit pas dépasser 25 caractères !";
					}

					if(isset($_POST['new_nom']) && !empty($_POST['new_nom']) AND $_POST['new_nom'] != $_SESSION['id']['nom'])
					{
						$new_nom = htmlspecialchars($_POST['new_nom']);
						if(strlen($new_nom) <= 30)
						{
							$insert_nom = $bdd->prepare("UPDATE user SET nom = ? WHERE id_user = ?");
							$insert_nom->execute(array($new_nom, $_SESSION['id']['id_user']));
							header('Location: profile.php?id='.$_SESSION['id']['id_user']);
						}
						else
							$erreur = "Votre nom ne doit pas dépasser 30 caractères !";
					}


					if(isset($_POST['new_prenom']) && !empty($_POST['new_prenom']) AND $_POST['new_prenom'] != $_SESSION['id']['prenom'])
					{
						$new_prenom = htmlspecialchars($_POST['new_prenom']);
						if(strlen($new_prenom) <= 30)
						{
							$insert_prenom = $bdd->prepare("UPDATE user SET prenom = ? WHERE id_user = ?");
							$insert_prenom->execute(array($new_prenom, $_SESSION['id']['id_user']));
							header('Location: profile.php?id='.$_SESSION['id']['id_user']);
						}
						else
							$erreur = "Votre Prénom ne doit pas dépasser 30 caractères !";
					}			
					

					if(isset($_POST['new_birth']) && !empty($_POST['new_birth']) AND $_POST['new_birth'] != $_SESSION['id']['anniversaire'])
					{
						$new_birth = htmlspecialchars($_POST['new_birth']);
						if(strlen($new_birth) < 15)
						{
							$insert_birth = $bdd->prepare("UPDATE user SET anniversaire = ? WHERE id_user = ?");
							$insert_birth->execute(array($new_birth, $_SESSION['id']['id_user']));
							header('Location: profile.php?id='.$_SESSION['id']['id_user']);
						}
						else
							$erreur = "Date de naissance trop longue !";
					}


					if(isset($_POST['new_adresse']) && !empty($_POST['new_adresse']) AND $_POST['new_adresse'] != $_SESSION['id']['adresse'])
					{
						$new_adresse = htmlspecialchars($_POST['new_adresse']);
						if(strlen($new_adresse) <= 60)
						{
							$insert_adresse = $bdd->prepare("UPDATE user SET adresse = ? WHERE id_user = ?");
							$insert_adresse->execute(array($new_adresse, $_SESSION['id']['id_user']));
							header('Location: profile.php?id='.$_SESSION['id']['id_user']);
						}
						else
							$erreur = "Adresse trop longue !";
					}


					if(isset($_POST['new_cp']) && !empty($_POST['new_cp']) AND $_POST['new_cp'] != $_SESSION['id']['code_postal'])
					{
						$new_cp = htmlspecialchars($_POST['new_cp']);
						$new_cp = intval($new_cp);
						if(strlen($new_cp) == 5)
						{
							$insert_cp = $bdd->prepare("UPDATE user SET code_postal = ? WHERE id_user = ?");
							$insert_cp->execute(array($new_cp, $_SESSION['id']['id_user']));
							header('Location: profile.php?id='.$_SESSION['id']['id_user']);
						}
						else
							$erreur = "Le code postal ne doit pas dépasser 5 chiffres";
					}


					if(isset($_POST['new_pays']) && !empty($_POST['new_pays']) AND $_POST['new_pays'] != $_SESSION['id']['pays'])
					{
						$new_pays = htmlspecialchars($_POST['new_pays']);
						if(strlen($new_pays) <= 20)
						{
							$insert_pays = $bdd->prepare("UPDATE user SET pays = ? WHERE id_user = ?");
							$insert_pays->execute(array($new_pays, $_SESSION['id']['id_user']));
							header('Location: profile.php?id='.$_SESSION['id']['id_user']);
						}
						else
							$erreur = "Votre pays est trop long !";
					}


					if(isset($_POST['new_ville']) && !empty($_POST['new_ville']) AND $_POST['new_ville'] != $_SESSION['id']['ville'])
					{
						$new_ville = htmlspecialchars($_POST['new_ville']);
						if(strlen($new_ville) <= 25)
						{
							$insert_ville = $bdd->prepare("UPDATE user SET ville = ? WHERE id_user = ?");
							$insert_ville->execute(array($new_ville, $_SESSION['id']['id_user']));
							header('Location: profile.php?id='.$_SESSION['id']['id_user']);
						}
						else
							$erreur = "Votre ville est trop long !";
					}

					if(isset($_POST['new_Int']) && !empty($_POST['new_Int']) AND $_POST['new_Int'] != $_SESSION['id']['hobby'])
					{
						$new_Int = htmlspecialchars($_POST['new_Int']);
						if(strlen($new_Int) <= 255)
						{
							foreach($_POST['new_Int'] as $valeur)
							{
								$valeur = htmlspecialchars($valeur);
								$hobby .= $valeur.', ';
							}
							$insert_Int = $bdd->prepare("UPDATE user SET hobby = ? WHERE id_user = ?");
							$insert_Int->execute(array($hobby, $_SESSION['id']['id_user']));
							header('Location: profile.php?id='.$_SESSION['id']['id_user']);
						}
						else
							$erreur = "Interêt trop long !";
					}
					
					if(isset($_POST['gender']) && !empty($_POST['gender']) AND $_POST['gender'] != $_SESSION['id']['civilite'])
					{
						$gender = htmlspecialchars($_POST['gender']);
						if(strlen($gender) <= 5)
						{
							$insert_Int = $bdd->prepare("UPDATE user SET civilite = ? WHERE id_user = ?");
							$insert_Int->execute(array($gender, $_SESSION['id']['id_user']));
							header('Location: profile.php?id='.$_SESSION['id']['id_user']);
						}
						else
							$erreur = "Genre mal choisie !";
					}


					if(isset($_POST['new_mail']) && !empty($_POST['new_mail']) AND $_POST['new_mail'] != $_SESSION['id']['mail_user'])
					{
						$new_mail = htmlspecialchars($_POST['new_mail']);

						if(strlen($new_mail) <= 100)
						{
							if(filter_var($new_mail, FILTER_VALIDATE_EMAIL))
							{
								$req_mail = $bdd->prepare("SELECT * FROM user WHERE mail_user = ?");
								$req_mail->execute(array($new_mail));
								$mail_exist = $req_mail->rowCount();
								if($mail_exist == 0)
								{				
									$insert_pseudo = $bdd->prepare("UPDATE user SET mail_user = ? WHERE id_user = ?");
									$insert_pseudo->execute(array($new_mail, $_SESSION['id']['id_user']));
									header('Location: profile.php?id='.$_SESSION['id']['id_user']);
								}
								else
									$erreur = "Cette adresse mail existe déjà !";
							}
							else
								$erreur = "Votre adresse mail est invalide !";
						}
						else
							$erreur = "Votre mail ne doit pas dépasser 100 caractères !";
					}

					if(isset($_POST['new_password']) && !empty($_POST['new_password']) AND isset($_POST['new_password2']) && !empty($_POST['new_password2']))
					{
						if($_POST['new_password'] == $_POST['new_password2'])
						{
							$password = htmlspecialchars($_POST['new_password']);
							if(strlen($password) <= 25)
							{
								$mdp1 = hash('sha256', $password);
								$insert_password = $bdd->prepare("UPDATE user SET user_passwd = ? WHERE id_user = ?");
								$insert_password->execute(array($mdp1, $_SESSION['id']['id_user']));
								$validate = "Sucess votre compte va ce mettra  jour !";
								header('Location: profile.php?id='.$_SESSION['id']['id_user']);
							}
							else
								$erreur = "Nouveau mot de passe trop long !";
						}	
						else
							$erreur = "Vos deux mots de passe ne correspondent pas !";		
					}
				}
				else
					$erreur = "Mauvais mot de passe de confirmation !";
			}
			else
				$erreur = "Vous n'avez pas renseigner le champs de confirmation !";
		}

	include '../views/edition_profile.view.php';
}
else
	header('Location: connexion.php');


?>