<!DOCTYPE html>
<html>
<head>
	<?php include('../include/include.php'); ?>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="../css/contact.css" />
</head>
<body>
<?php require_once('../include/header.php'); ?>
<br/><br/><br/>
<h1>Formulaire de contact ci-dessous.</h1>
<br/><br/><br/>
<?php   if(isset($erreur))
            echo '<br /><p class="erreur">'.$erreur.'</p>';

          elseif(isset($validate))
            echo '<br /><p class="validate">'.$validate.'</p>';
        ?>
 <form action="" method="POST">
		  <div>
		    <label for="nom">Nom :</label>
		    <input type="text" id="nom" name="user_name">
		  </div>

		  <div>
		    <label for="courriel">Courriel :</label>
		    <input type="email" id="courriel" name="user_email">
		  </div>

		  <div>
		    <label for="message">Message :</label>
		    <textarea id="message" name="user_message"></textarea>	
		  </div>
		 
		  <div class="button">
		    <button type="submit">Envoyer votre message</button>
		  </div>
	</form>
</body>
</html>