<!DOCTYPE html>
<html>

<head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />

<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Knewave&amp;subset=latin-ext" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet" />
    <title>Edition Profile</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<link rel="icon" type="image/png" href="../image/logobio.png" sizes="20x20" />
</head>

<body>
  <?php include '../include/header.php';?>

  <div class="container">
    <div class="row">
      <div class="col-md-10 ">
        <form class="form-horizontal">
          <fieldset>
            <legend>Nouvelles information</legend>

            <div class="form-group">
              <label class="col-md-4 control-label" for="nom">Nom</label>  
              <div class="col-md-4">
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                   </div>
                   <input id="nom" name="new_nom" type="text"  maxlength="25" placeholder="nom" class="form-control input-md" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id']['nom'];}?>" />
                  </div>    
              </div>  
            </div>
             <div class="form-group">
              <label class="col-md-4 control-label" for="prenom">Prénom:</label>  
              <div class="col-md-4">
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                   </div>
                   <input id="prenom" name="new_prenom" type="text"  maxlength="25" placeholder="prenom" class="form-control input-md" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id']['prenom'];}?>" />
                  </div>    
              </div>  
            </div>
             <div class="form-group">
              <label class="col-md-4 control-label" for="pseudo">Pseudo:</label>  
              <div class="col-md-4">
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                   </div>
                   <input id="pseudo" name="new_pseudo" type="text"  maxlength="25" placeholder="pseudo" class="form-control input-md" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id']['pseudo'];}?>" />
                  </div>    
              </div>  
            </div>

            <!-- File Button --> 
            <div class="form-group">
              <label class="col-md-4 control-label" for="Upload photo">Photo de profile</label>
              <div class="col-md-4">
                <input id="Upload photo" name="photo_profile" class="input-file" type="file" />
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Date Of Birth">Date De Naissance</label>  
              <div class="col-md-4">
                <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-birthday-cake"></i>          
                     </div>
                     <input id="Date Of Birth" name="Date Of Birth" type="date" maxlength="10" placeholder="Date De Naissance" class="form-control input-md" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id']['anniversaire'];}?>" />
                    </div>      
                </div>
            </div>
            <!-- Multiple Radios (inline) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="civilite">Sexe:</label>
              <div class="col-md-4"> 
                <label class="radio-inline" for="civilite-0">
                  <input type="radio" name="civilite" id="civilite-0" value="Homme" <?php if(isset($_SESSION['id'])){if(fnmatch('Homme', $_SESSION['id']['civilite'])){echo 'checked=""';}}?> / >
                  Homme
                </label> 
                <label class="radio-inline" for="civilite-1">
                  <input type="radio" name="civilite" id="civilite-1" value="Femme" <?php if(isset($_SESSION['id'])){if(fnmatch('Femme', $_SESSION['id']['civilite'])){echo 'checked=""';}}?> />
                  Femme
                </label> 
                <label class="radio-inline" for="civilite-2">
                  <input type="radio" name="civilite" id="civilite-2" value="Ovni" <?php if(isset($_SESSION['id'])){if(fnmatch('Ovni', $_SESSION['id']['civilite'])){echo 'checked=""';}}?> />
                  Autre
                </label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Addresse:</label>  
              <div class="col-md-4  col-xs-4">
              <input id="Permanent Address" name="Permanent Address" type="text" placeholder="24 rue de la bastille" class="form-control input-md " value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id']['adresse'];}?>" />
              </div>              
            </div>
           
              <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ville">Ville:</label>  
              <div class="col-md-4">
              <div class="input-group">
                   <div class="input-group-addon">
                 <i class="fa fa-street-view"></i>                    
                   </div>
                      <input id="ville" name="ville" type="text" placeholder="ex: Marseille" class="form-control input-md" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id']['ville'];}?>" />                
                  </div>                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Email Address">Addresse Email</label>  
              <div class="col-md-4">
              <div class="input-group">
                   <div class="input-group-addon">
                 <i class="fa fa-envelope-o"></i>
                    
                   </div>
                <input id="Email Address" name="Email Address" type="text" placeholder="exemple@mail.com" class="form-control input-md" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id']['mail_user'];}?>" />
                
                  </div>
              
              </div>
            </div>

            <!-- Multiple Checkboxes -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="pays">Pays:</label>
              <div class="col-md-4">
              <div class="checkbox">
                <label for="pays-0">
                  <input type="checkbox" name="pays" id="pays-0" value="France" <?php if(isset($_SESSION['id'])){if(fnmatch('France', $_SESSION['id']['pays'])){echo 'checked=""';}}?>>
                  France
                </label>
                </div>
              <div class="checkbox">
                <label for="pays-1">
                  <input type="checkbox" name="pays" id="pays-1" value="Belgique" <?php if(isset($_SESSION['id'])){if(fnmatch('Belgique', $_SESSION['id']['pays'])){echo 'checked=""';}}?> />
                 Belgique
                </label>
                </div>
              <div class="checkbox">
                <label for="pays-2">
                  <input type="checkbox" name="pays" id="pays-2" value="Suisse" <?php if(isset($_SESSION['id'])){if(fnmatch('Suisse', $_SESSION['id']['pays'])){echo 'checked=""';}}?> />
                 Suisse
                </label>
                </div>                
              </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="hobby">Interêt:</label>
              <div class="col-md-4">
              <div class="checkbox">
                <label for="hobby-0">
                  <input type="checkbox" name="hobby" id="hobby-0" value="Sport" <?php if(isset($_SESSION['id'])){if(preg_match('/Sport/i', $_SESSION['id']['hobby'])){echo 'checked=""';}}?> />
                  Sport
                </label>
                </div>
              <div class="checkbox">
                <label for="hobby-1">
                  <input type="checkbox" name="hobby" id="hobby-1" value="Cinéma" <?php if(isset($_SESSION['id'])){if(preg_match('/Cinema/i', $_SESSION['id']['hobby'])){echo 'checked=""';}}?> />
                Cinéma
                </label>
                </div>
              <div class="checkbox">
                <label for="hobby-2">
                  <input type="checkbox" name="hobby" id="hobby-2" value="Internet" <?php if(isset($_SESSION['id'])){if(preg_match('/Internet/i', $_SESSION['id']['hobby'])){echo 'checked=""';}}?> />
                 Internet
                </label>
                </div>
                 <div class="checkbox">
                <label for="hobby-3">
                  <input type="checkbox" name="hobby" id="hobby-3" value="Voyages" <?php if(isset($_SESSION['id'])){if(preg_match('/Voyage/i', $_SESSION['id']['hobby'])){echo 'checked=""';}}?> />
                 Voyages
                </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="new_password">Nouveau mot de passe</label/>  
              <div class="col-md-4">
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                   </div>
                   <input id="new_password" name="new_password" type="new_password"  maxlength="25" placeholder="nouveau pass" class="form-control input-md" />
                  </div>    
              </div>  
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="new_password2">Confirmer Nouveau mdp</label>  
              <div class="col-md-4">
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                   </div>
                   <input id="new_password2" name="new_password2" type="new_password2"  maxlength="25" placeholder="nouveau pass" class="form-control input-md" />
                  </div>    
              </div>  
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="password">Mot de pass actuel:</label>  
              <div class="col-md-4">
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                   </div>
                   <input id="password" name="password_confirm" type="password"  maxlength="25" placeholder="pass actuel" class="form-control input-md" />
                  </div>    
              </div>  
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" ></label>  
              <div class="col-md-4">
              <input type="submit" name="form_edition" class="btn btn-success">
              <a href="profile.php?id=<?=$_SESSION['id']['id_user']?>" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Annuler</a>
                
              </div>
            </div>

</fieldset>
</form>
</div>
<div class="col-md-2 hidden-xs">
<img src="../image/user.jpeg" alt="image user" class="img-responsive img-thumbnail ">
  </div>


</div>
   </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
