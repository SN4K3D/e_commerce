<?php 
include '../classe/include_all_classe.php';

if(isset($_GET['id']) && $_GET['id'] > 0 && isset($_SESSION['id']) AND $_GET['id'] == $_SESSION['id']['id_user'])
{
	if(!isset($_GET['del']))
		include ("../views/profile.view.php");
	elseif($_GET['id'] === $_SESSION['id']['id_user'])
	{
		$user_id = htmlspecialchars($_SESSION['id']['id_user']);
		$BDD->query('DELETE FROM `user` WHERE `user`.`id_user` = ?',array($user_id));
		$_SESSION = NULL;
		session_destroy();
		echo 'compte supprimé';
	}
}
else
	header('Location: connexion.php');
?>