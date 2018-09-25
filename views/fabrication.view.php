<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8"/>
    <head>
        <title>BioEssence</title>
<?php include ('../include/include.php'); ?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Knewave&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" type="text/css" href="../css/fabricationecom.css" />
       
    </head>
   
        
    

    
<body>
    
<link rel="stylesheet" type="text/css" href="../css/header.css" />
<nav class="navbar navbar-expand-lg navbar-default">
  <a class="logo"><img id="logo_navbar" src="../image/logobio.png" alt="img_bio" width=120 height=80 /> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav menu">
      <a class="nav-item nav-link" href="acceuil.php"><i class="fas fa-home"></i> Accueil </a>
      <a class="nav-item nav-link" href="fabrication.php"><i class="fas fa-braille"></i> Notre fabrication</a>
      <a class="nav-item nav-link" href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
    <?php if(!isset($_SESSION['id'])): ?>
      <a class="nav-item nav-link" href="connexion.php"><i class="fas fa-user"></i> Connexion</a>
    <?php else: ?>
    <a class="nav-item nav-link" href="profile.php?id=<?= $_SESSION['id']['id_user'] ?>"><i class="fas fa-user-circle"></i> Profile</a>
    <?php endif ?>
    <a class="nav-item nav-link" href="panier.php" id="panier_header"><i class="fas fa-shopping-cart"></i>
    <?= $panier->count() ?> article <?php if(isset($_SESSION['prix_total'])) echo number_format($_SESSION['prix_total'],2,',','')?>€</a> 
    <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])): ?>
     <a class="nav-item nav-link" href="deconnexion.php" ><i class="fas fa-sign-out-alt"></i>Deconnexion</a>
    <?php endif ?>
        
    </div>
  </div>

</nav>
    
   
<!-- DEBUT RUBRIQUE FABRICATION-->
                <div class="container-fluid first">
                            <div class="row">
                            <div  class="col-lg-6 unoimage"> <img src="../image/fabrication.jpg" alt="fabrication"  width=755 height=450> </div>
                            <div  class="col-lg-6 unopara ">
                            <h1> Le labo </h1> 
                            <p> C’est au laboratoire <strong> "Bioessence" </strong> que nos produits sont confectionnés avec le plus grand soins afin de satisfaire notre client&egrave;le fid&egrave;le et grandissante. 
                            </p>
                            </div>
                            </div>
                    
                     <div class="row">
                    <div class="col-lg-6 dospara"> 
                        <h1> Fabrication</h1> 
                        <p> Nos huiles essentielles sont obtenues par distillation <br> &agrave; la vapeur d’eau, sans détartrant chimique et sous basse <br> pression.
                            C'est le résultat d'un travail minutieux et d'un savoir  <br> faire anc&ecirc;strale.
                        </p>
                    </div>
                    <div class="col-lg-6 dosimage"> <img src="../image/photo10.jpg" alt="preparation" width=825 height=450> </div>
                    
                </div>
                </div>
                
                <div class="container-fluid twice">
                    <div class="row fabricone">
       
                        <div class="col-lg-4  plantation "> <span class="nombre"> 1 </span> <span class="titrefabric">  PLANTATION </span>
                            <div class="pspecial "> La plantation se fait de façon très sélective et manuelle. </div> 
                        </div>    
                        <div class="col-lg-4  floraison"> <span class="nombre"> 2 </span> <span class="titrefabric">  FLORAISON </span>
                            <div class="pspecial"> Une floraison surveillée et suivie. </div> 
                        </div>
                        <div class="col-lg-4 recolte"> <span class="nombre"> 3 </span> <span class="titrefabric"> RECOLTE </span>
                                <div class="pspecial"> La r&eacute;colte se fait manuellement et demande beaucoup d’attention afin de ne pas abimer la fleur.</div> 
                        </div>
                    </div>
                    
                    <div class="row fabrictwo">
                        
                        <div class="col-lg-4  distillerie "> <span class="nombre"> 4 </span> <span class="titrefabric"> DISTILLERIE  </span>
                                <div class="pspecial"> La pr&eacute;paration de la récolte avant la distillerie.
                                </div> 
                            </div>
                        <div class="col-lg-4 conditionnement"> <span class="nombre"> 5 </span> <span class="titrefabric"> CONDITIONNEMENT </span>
                                <div class="pspecial"> Nos produits sont ensuite emballés et conditionn&eacute;s  avec le plus grands soins.
                                </div>
                            </div>
                        <div class="col-lg-4  mise en vente "> <span class="nombre"> 6 </span> <span class="titrefabric"> MISE EN VENTE </span>
                                <div class="pspecial"> Les produits sont ensuite mis en magasins et envoyés  &agrave; nos distributeurs et clients.</div>
                            </div>
                    
                   </div>
                </div>
     <!-- FIN  RUBRIQUE FABRICATION-->              
    </body>
</html>
