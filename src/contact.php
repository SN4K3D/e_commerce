<?php
require ('../classe/include_all_classe.php');

if(isset ($_POST["user_name"]) AND isset($_POST["user_email"]) AND isset($_POST["user_message"]))
		{
		    if ( !empty($_POST["user_name"]) AND !empty($_POST["user_email"]) AND  !empty($_POST["user_message"]))
		    {
			$user_name = strip_tags($_POST["user_name"]);
			$user_email = strip_tags($_POST["user_email"]);
			$user_message = strip_tags($_POST["user_message"]);
			mail("novixjo@hotmail.com", "message de ".$user_email, $user_message."\n".$user_name);
			$validate = "Success votre mail a bien été envoyer!";
		    }
		    else
		    	$erreur = "Veuillez remplire tout les champs !";
		}

include '../views/contact.view.php';
?>