<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<?php include('../include/include.php');  ?>
	<link rel="stylesheet" type="text/css" href="../css/connexion.css" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Eczar" rel="stylesheet">

</head>
<body>
	<?php include('../include/header.php'); ?>
<div class="container">
		<div class="row">
			<div id="formulaire" class="col-sm-6 col-md-4 col-md-offset-4">
				<i class="text-danger"><?php if(isset($erreur)){echo $erreur;} ?></i>
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Connecte toi pour continuer</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="#" method="POST">
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="E-Mail" name="mail" type="email" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Mot de Passe" name="password" type="password" value="">
											</div>
										</div>
										<div class="form-group">
											<input type="submit" name="form_connexion" class="btn btn-lg btn-block" value="Connexion !">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="panel-footer ">
						Tu n'a pas encore de compte ! <a href="inscription.php" onClick=""> Inscris toi ici </a>
					</div>
                </div>
			</div>
		</div>
	</div>
</body>
</html>