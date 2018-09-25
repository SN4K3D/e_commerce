<link rel="stylesheet" type="text/css" href="../css/header.css" />
<nav class="navbar navbar-expand-lg navbar-default">
  <a class="logo"><img id="logo_navbar" src="../image/logobio.png" alt="img_bio" width=120 height=80 /> </a>
 
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