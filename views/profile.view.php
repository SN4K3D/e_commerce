<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<?php include('../include/include.php');  ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" type="text/css" href="../css/profile.css" />
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
	<?php include('../include/header.php'); ?>

<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?= $_SESSION['id']['pseudo'] ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../image/user.jpeg" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    	<tr>
                        <td>Nom :</td>
                        <td><?= $_SESSION['id']['nom'] ?></td>
                      </tr>
                      <tr>
                        <td>Prénom :</td>
                        <td><?= $_SESSION['id']['prenom'] ?></td>
                      </tr>
                      <tr>
                        <td>Sexe :</td>
                        <td><?= $_SESSION['id']['civilite'] ?></td>
                      </tr>
                      <tr>
                        <td>Date de naissance :</td>
                        <td><?= $_SESSION['id']['anniversaire'] ?></td>
                      </tr>
                      <tr>
                        <td>Adresse :</td>
                        <td><?= $_SESSION['id']['adresse'] ?></td>
                      </tr>
                      <tr>
                        <td>Ville :</td>
                        <td><?= $_SESSION['id']['ville'] ?></td>
                      </tr>                  
                      <tr>
                        <td>Code postale :</td>
                        <td><?= $_SESSION['id']['code_postal'] ?></td>
                      </tr>
                      <tr>
                        <td>Pays :</td>
                        <td><?= $_SESSION['id']['pays'] ?></td>
                      </tr>
                      <tr>
                        <td>Email :</td>
                        <td><a href="mailto:<?= $_SESSION['id']['mail_user'] ?>"><?= $_SESSION['id']['mail_user'] ?></a></td>
                      </tr>
                      <tr>
                        <td>Interêt :</td>
                        <td><?= $_SESSION['id']['hobby'] ?></td>                           
                      </tr>                     
                    </tbody>
                  </table>                  
                  <a href="#" class="btn btn-primary">Team Sales Performance</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a href="edition_profile.php" title="éditer le profile" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        <span class="pull-right">                            
                            <a href="profile.php?id=<?=$_SESSION['id']['id_user']?>&del=1" title="Supprimer mon compte" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
</body>
</html>