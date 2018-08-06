<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>S'enregistrer</title>
  <?php include('../include/include.php');  ?>
  <link href="../css/inscription.css" rel="stylesheet" type="text/css" />
</head>
<body>  
  <?php include('../include/header.php'); ?>
  <form method="POST">
    <center>
      <p class="titre">Coordonnées</p>
      <?php   if(isset($erreur))
            echo '<br /><p class="erreur">'.$erreur.'</p>';

          elseif(isset($validate))
            echo '<br /><p class="validate">'.$validate.'</p>';
        ?>
      <fieldset id="coordonnees">
        <p id="civilite"><label>Civilité : </label>
          <input type="radio" name="civilite" value="Homme" />Homme
          <input type="radio" name="civilite" value="Femme" />Femme
        </p>
        <label>Nom : </label>
        <input type="text" name="nom" size="30" maxlength="25" value="<?php if(isset($nom)){echo $nom;} ?>" /><br />
        <label>Prénom : </label>
        <input type="text" name="prenom" size="30" maxlength="25" value="<?php if(isset($prenom)){echo $prenom;} ?>" /><br />
        <label>Adresse : </label>
        <input type="text" name="adresse" size="30" maxlength="60"value="<?php if(isset($adresse)){echo $adresse;} ?>" /><br />
        <label>Adresse email : </label>
        <input type="email" name="mail" size="30" maxlength="30" value="<?php if(isset($mail)){echo $mail;} ?>" /><br />
        <label>confirmation email : </label>
        <input type="email" name="mail2" size="30" maxlength="30" /><br />
        <label>Date de naissance : </label>
        <input type="date" name="anniversaire" size="30" maxlength="10" /><br />
        <label>Code postal : </label>
        <input type="text" name="cp" pattern="\d*" minlength="5" maxlength="5" size="5" value="<?php if(isset($cp)){echo $cp;} ?>" /><br />
        <label>Ville : </label>
        <input type="text" name="ville" size="25" value="<?php if(isset($ville)){echo $ville;} ?>" /><br />
        <label>Pays : </label>
        <select name="pays">
          <option value="France">France</option>
          <option value="Belgique">Belgique</option>
          <option value="Suisse">Suisse</option>
        </select>
        <p id="interets"><label>Centres d'intérêts : </label>
          <input type="checkbox" name="interets[]" value="Sport" />Sport
          <input type="checkbox" name="interets[]" value="Cinema" />Cinéma<br />
          <input type="checkbox" name="interets[]" value="Internet" />Internet
          <input type="checkbox" name="interets[]" value="Voyages" />Voyages
        </p>
      </fieldset>
      <p class="titre">Identifiant</p>
      <fieldset id="coordonnees">
        <label>Login : </label>
        <input type="text" name="pseudo" size="25" maxlength="25" value="<?php if(isset($pseudo)){echo $pseudo;} ?>" /><br />
        <label>Mot de passe : </label>
        <input type="password" name="password" size="25" maxlength="25" /><br />
        <label>Confirmation Mot de passe : </label>
        <input type="password" name="password2" size="25" maxlength="25" /><br />
      </fieldset>
      <p id="buttons">
        <input type="submit" name="form_inscription" value="Envoyer" />
        <input type="reset" value="Recommencer" />
      </p>
    </center>
  </form>
</body>
</html>
