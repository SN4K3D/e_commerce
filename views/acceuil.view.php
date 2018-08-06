<!DOCTYPE html>
<html>
    <head>
        <?php include('../include/include.php'); ?>
        <title>BioEssence</title>        
        <script type="text/javascript" src="../js/app.js"></script>   

        <script src="../js/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="../css/owl.theme.default.min.css" />
        <link rel="stylesheet" href="../css/owl.carousel.min.css" />
        <link rel="stylesheet" href="../css/acceuil.css" />  
</head>

<body>
     <?php require_once('../include/header.php'); ?>
        
       <!-- Debut CAROUSEL -->
        
     <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../image/tube3.jpg" alt="tube3">
            </div>
            <!--<div class="carousel-item">
                <img src="image/photo11.jpg" alt="photo11">
            </div> -->
            <div class="carousel-item">
                <img src="../image/recette.jpg" alt="recette">
            </div>
        </div>

  <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <!-- Fin CAROUSEL-->
        
         <div class="container-fluid">
            <div class= "row titre1">
                <h1 class="col-md-12 col-lg-12 col-xs-12 col-sm-12"> Engagés dans le Bio, nos huiles essentielles sont naturelles et pures à 100%!</h1>
            </div>
            <div class = "row titre2">
                <p class="col-md-12 col-lg-12 col-xs-12 col-sm-12"> Notre collection </p>
            </div>
        </div>
        
    <!-- Debut PRODUITS-->

       
        <div class="container produits">                    
            <div class="row">
                    <div class="owl-carousel owl-theme"> 
                     <?php foreach($mes_articles as $article ): ?>               
                        <div class= "col-md-3  articles item"> 
                            <div class="boxarticles card"> 
                                <a href="article.php?id_article=<?= $article->id_article ?>"><img src="../image/<?= $article->id_article ?>.jpg" width="200" height="200" /></a>
                                <p class="allp"><?= $article->nom_produit ?></p>
                                <p class="prix"><?= number_format($article->prix_unitaire, 2,',','') ?> €</p>
                                <button onclick="addPanier(<?= $article->id_article ?>)" type="button" class="btn btn-primary btn-sm monbouton">Ajouter au panier</button>
                            </div>
                        </div>
                        <?php endforeach ?> 
                    </div>
            </div>
        </div>
         
         <!-- Fin PRODUITS-->  

        <!--CERTIFIE BIO-->
        
        <div class="container-fluid"> 
            <div class="row">
                <div class= "col-md-6 col-xl-6 uno">
                    <blockquote> 
                    <p class="unop1"> Certifié BiO </p>
                    <p class="unop2"> "Tous nos produits sont certifiés biologiquement issue d'une agriculture biologique aux normes européennes". </p>
                     </blockquote>
                </div>
                
                <div class= "col-md-4 col-xl-4 dos logobio2">
                    <img src="../image/bio2.png" />
                </div>
                
                <div class= "col-md-4 col-xl-4 dos logoab">
                    <img src="../image/logoab.png" />
                </div>
                
               
            </div>
        </div>
    
    <!-- Fin CERTIFIE BIO-->
    
    
    
        <footer>
            <!--PAIEMENT SECURISE-->
            <div class= "container-fluid footerpage"> 
                <div class="reinsurance">
                    <div class="row">
                        <div class="col-lg-2 dernier">
                            <svg version="1.1" id="secu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            x="0px" y="0px" viewBox="0 0 95 95" enable-background="new 0 0 95 95" xml:space="preserve"> 
                            <path fill="#99999A" d="M31.9,42.9l2.8-2.8c0,0-0.3-4.3,0.3-6.7c1-3.8,4.8-8.4,11.8-8.7s11.7,4.7,12.9,8.7c0.7,2.4,0.3,6.7,0.3,6.7 l2.6,2.8c0,0,0.5-5.4-0.1-8.6c-1-5-2.3-11.8-15.5-11.8c-12.5,0-14,7.2-15,11.8C31.2,37.7,31.9,42.9,31.9,42.9z"></path> 
                            <path fill="#99999A" d="M30.7,44.3L30.7,44.3 M63.7,55.2c0,9.1-7.4,16.5-16.5,16.5c-9.1,0-16.5-7.4-16.5-16.5 c0-9.1,7.4-16.5,16.5-16.5C56.3,38.7,63.7,46.1,63.7,55.2L63.7,55.2z M50.5,51.9c0-1.8-1.5-3.3-3.3-3.3s-3.3,1.5-3.3,3.3 c0,1.2,0.7,2.2,1.7,2.8v5.5c0,0.9,0.7,1.7,1.7,1.7c0.9,0,1.7-0.7,1.7-1.7v-5.5C49.8,54.1,50.5,53.1,50.5,51.9L50.5,51.9z M50.5,51.9 "></path> 
                            <circle fill="none" stroke="#99999A" stroke-miterlimit="10" cx="47.2" cy="47.5" r="43.8"></circle> </svg>
                            Paiement securis&eacute; 
                        </div>
                        
                <!--LIVRAISON OFFERTE-->

                        <div class="col-lg-2 dernier">
                             <svg version="1.1" id="livraison" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 95 95" enable-background="new 0 0 95 95" xml:space="preserve"> 
                             <circle fill="none" stroke="#99999A" stroke-miterlimit="10" cx="46.4" cy="46.6" r="43.8"></circle> 
                             <g> <path fill="#99999A" d="M10.8,33.9h1.9v7.6h4.4l-0.2,1.7h-6.1V33.9z"></path> 
                             <path fill="#99999A" d="M18.8,33.9h1.9v9.3h-1.9V33.9z"></path> 
                             <path fill="#99999A" d="M22.2,33.9h2.2l2.2,6.6l2.3-6.6H31l-3.5,9.3h-1.8L22.2,33.9z"></path> 
                             <path fill="#99999A" d="M32.4,33.9h3.3c0.7,0,1.3,0.1,1.8,0.3s0.8,0.4,1.1,0.7c0.3,0.3,0.5,0.6,0.6,0.9c0.1,0.3,0.2,0.7,0.2,1 c0,0.6-0.1,1.1-0.3,1.5c-0.2,0.4-0.6,0.7-1.1,1l1.9,3.9h-2.1l-1.6-3.5h-0.3h-1.5v3.5h-1.9V33.9z M35.8,38.1c0.3,0,0.6,0,0.8-0.1 c0.2-0.1,0.4-0.2,0.5-0.3c0.1-0.1,0.2-0.3,0.2-0.4c0-0.2,0.1-0.3,0.1-0.5c0-0.2,0-0.3-0.1-0.5c-0.1-0.2-0.1-0.3-0.3-0.4 s-0.3-0.2-0.5-0.3c-0.2-0.1-0.5-0.1-0.8-0.1h-1.3v2.6H35.8z"></path> 
                             <path fill="#99999A" d="M44.2,33.9H46l3.5,9.3h-2.1L46.7,41h-3.2l-0.7,2.1h-2L44.2,33.9z M46.2,39.4L45,36.1l-1.1,3.3H46.2z"></path> 
                             <path fill="#99999A" d="M50.9,33.9h1.9v9.3h-1.9V33.9z"></path> 
                             <path fill="#99999A" d="M56.5,40.2c0,0.6,0.2,1,0.6,1.2c0.3,0.3,0.8,0.4,1.4,0.4c0.3,0,0.6,0,0.8-0.1c0.2-0.1,0.4-0.2,0.5-0.3 c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.1,0.1-0.3,0.1-0.5c0-0.2-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.4-1-0.5l-1.2-0.2 c-0.5-0.1-0.9-0.2-1.3-0.3c-0.4-0.1-0.7-0.3-0.9-0.5s-0.4-0.5-0.6-0.8s-0.2-0.7-0.2-1.1s0.1-0.8,0.3-1.2c0.2-0.3,0.4-0.6,0.7-0.8 c0.3-0.2,0.7-0.4,1.1-0.5c0.4-0.1,0.9-0.2,1.5-0.2c0.7,0,1.2,0.1,1.7,0.2c0.5,0.2,0.8,0.4,1.1,0.6c0.3,0.3,0.5,0.6,0.6,0.9 c0.1,0.3,0.2,0.7,0.3,1.1l-1.8,0.2c-0.1-0.5-0.3-0.9-0.6-1.1c-0.3-0.2-0.7-0.3-1.2-0.3c-0.3,0-0.6,0-0.8,0.1 c-0.2,0.1-0.4,0.1-0.5,0.2s-0.2,0.2-0.3,0.3c-0.1,0.1-0.1,0.2-0.1,0.4c0,0.3,0.1,0.6,0.3,0.8s0.5,0.3,1,0.4l1.3,0.2 c1,0.2,1.7,0.5,2.2,1c0.5,0.4,0.7,1.1,0.7,1.9c0,0.4-0.1,0.8-0.2,1.1c-0.2,0.3-0.4,0.6-0.7,0.9c-0.3,0.3-0.7,0.5-1.1,0.6 c-0.5,0.1-1,0.2-1.6,0.2c-1.3,0-2.2-0.3-2.9-0.8c-0.7-0.5-1-1.4-1.1-2.5H56.5z"></path> 
                             <path fill="#99999A" d="M68,43.4c-0.7,0-1.3-0.1-1.9-0.3s-1-0.6-1.4-1c-0.4-0.4-0.7-0.9-0.9-1.5c-0.2-0.6-0.3-1.3-0.3-2 s0.1-1.4,0.3-2c0.2-0.6,0.5-1.1,0.9-1.5c0.4-0.4,0.9-0.7,1.4-1c0.5-0.2,1.2-0.3,1.8-0.3c0.7,0,1.3,0.1,1.9,0.3c0.5,0.2,1,0.6,1.4,1 c0.4,0.4,0.7,0.9,0.9,1.5s0.3,1.3,0.3,2s-0.1,1.4-0.3,2c-0.2,0.6-0.5,1.1-0.9,1.5c-0.4,0.4-0.8,0.8-1.4,1S68.7,43.4,68,43.4z M68,41.8c0.8,0,1.4-0.3,1.8-0.8c0.4-0.6,0.6-1.3,0.6-2.4c0-1-0.2-1.8-0.6-2.4c-0.4-0.6-1-0.8-1.8-0.8s-1.4,0.3-1.8,0.8 c-0.4,0.6-0.6,1.4-0.6,2.4c0,1,0.2,1.8,0.6,2.4C66.6,41.5,67.2,41.8,68,41.8z"></path> 
                             <path fill="#99999A" d="M74.4,33.9h1.7L80,40v-6.1h1.9v9.3h-1.7l-3.8-6v6h-1.9V33.9z"></path> 
                             <path fill="#99999A" d="M15.7,58.5c-0.8,0-1.5-0.1-2.1-0.4S12.5,57.5,12,57c-0.4-0.5-0.8-1.1-1-1.8s-0.4-1.5-0.4-2.4 s0.1-1.7,0.4-2.4c0.2-0.7,0.6-1.3,1-1.8s1-0.9,1.6-1.1c0.6-0.3,1.3-0.4,2.1-0.4c0.8,0,1.4,0.1,2.1,0.4c0.6,0.3,1.1,0.6,1.6,1.1 c0.4,0.5,0.8,1.1,1,1.8c0.2,0.7,0.4,1.5,0.4,2.4c0,0.9-0.1,1.7-0.3,2.4s-0.6,1.3-1,1.8c-0.4,0.5-1,0.9-1.6,1.1S16.5,58.5,15.7,58.5 z M15.7,56.9c1,0,1.8-0.4,2.3-1.1c0.5-0.7,0.8-1.7,0.8-3c0-0.6-0.1-1.2-0.2-1.7c-0.1-0.5-0.3-0.9-0.6-1.3c-0.3-0.3-0.6-0.6-1-0.8 c-0.4-0.2-0.8-0.3-1.4-0.3s-1,0.1-1.4,0.3c-0.4,0.2-0.7,0.5-1,0.8c-0.3,0.4-0.5,0.8-0.6,1.3s-0.2,1.1-0.2,1.7c0,1.3,0.3,2.3,0.8,3 C13.8,56.5,14.6,56.9,15.7,56.9z"></path> 
                             <path fill="#99999A" d="M23.9,47.5h6.8V49h-5v3h4.7v1.6h-4.7v4.5h-1.8V47.5z"></path> 
                             <path fill="#99999A" d="M33.8,47.5h6.8V49h-5v3h4.7v1.6h-4.7v4.5h-1.8V47.5z"></path> 
                             <path fill="#99999A" d="M43.7,47.5h7.1V49h-5.3v2.9h5v1.6h-5v3.2h5.6l-0.2,1.6h-7.2V47.5z"></path> 
                             <path fill="#99999A" d="M53.9,47.5h3.7c0.8,0,1.5,0.1,2,0.3c0.5,0.2,0.9,0.4,1.2,0.7s0.5,0.6,0.6,1s0.2,0.7,0.2,1.1 c0,0.7-0.1,1.3-0.4,1.7c-0.3,0.5-0.7,0.9-1.3,1.2l2.2,4.7h-2l-1.9-4.3c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0h-1.9v4.2h-1.8V47.5z M57.7,52.4c0.4,0,0.8,0,1-0.1c0.3-0.1,0.5-0.2,0.6-0.4c0.2-0.2,0.3-0.3,0.3-0.6c0.1-0.2,0.1-0.5,0.1-0.7c0-0.2,0-0.5-0.1-0.7 c-0.1-0.2-0.2-0.4-0.4-0.5c-0.2-0.1-0.4-0.3-0.7-0.3S58,49,57.6,49h-1.8v3.5H57.7z"></path> 
                             <path fill="#99999A" d="M67.1,49h-3.4v-1.6h8.6V49h-3.4v9.2h-1.8V49z"></path> 
                             <path fill="#99999A" d="M75,47.5h7.1V49h-5.3v2.9h5v1.6h-5v3.2h5.6l-0.2,1.6H75V47.5z"></path> </g> <g> <g> 
                             <circle fill="#99999A" cx="17" cy="26.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="75.7" cy="26.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="68.3" cy="26.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="60.8" cy="26.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="53.4" cy="26.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="45.9" cy="26.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="38.4" cy="26.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="31" cy="26.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="24.5" cy="26.7" r="1.4"></circle> </g> <g> 
                             <circle fill="#99999A" cx="17" cy="65.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="75.7" cy="65.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="68.3" cy="65.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="60.8" cy="65.7" r="1.4"></circle> 
                             <circle fill="#99999A" cx="53.4" cy="65.7" r="1.4"> </circle> 
                            <circle fill="#99999A" cx="45.9" cy="65.7" r="1.4"></circle> 
                            <circle fill="#99999A" cx="38.4" cy="65.7" r="1.4"></circle> 
                            <circle fill="#99999A" cx="31" cy="65.7" r="1.4"></circle> 
                            <circle fill="#99999A" cx="24.5" cy="65.7" r="1.4"></circle> 
                            </g> </g> </svg>
                            Livraison offerte dès 40€
                        </div>

                <!--EXPEDITION-->
                        <div class="col-lg-2 dernier">
                            <svg version="1.1" id="expedition" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 95 95" enable-background="new 0 0 95 95" xml:space="preserve">
                            <circle fill="none" stroke="#99999A" stroke-miterlimit="10" cx="47.7" cy="47.1" r="43.8"></circle> <g> 
                            <path fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" d="M21.4,43.4"></path> 
                            <path fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" d="M75.1,49.8"></path> 
                            <rect x="34.8" y="62.4" fill="#999899" width="6.7" height="1.5"></rect> 
                            <rect x="42" y="62.4" fill="#999899" width="13.9" height="1.5"></rect> 
                            <path fill="#999899" d="M29.6,57.2c-2.6,0-4.6,2.1-4.6,4.6c0,2.6,2.1,4.6,4.6,4.6c2.6,0,4.6-2.1,4.6-4.6 C34.2,59.3,32.1,57.2,29.6,57.2L29.6,57.2z M29.6,63.9c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.1,0,2,0.9,2,2 C31.6,63,30.7,63.9,29.6,63.9L29.6,63.9z M29.6,63.9"></path> 
                            <path fill="#999899" d="M61.1,57.2c-2.6,0-4.6,2.1-4.6,4.6c0,2.6,2.1,4.6,4.6,4.6s4.6-2.1,4.6-4.6C65.7,59.3,63.7,57.2,61.1,57.2 L61.1,57.2z M61.1,63.9c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.1,0,2,0.9,2,2C63.1,63,62.2,63.9,61.1,63.9L61.1,63.9z M61.1,63.9"></path> 
                            <path fill="#999899" d="M41,34.7c-5,1.3-7.1,4.3-7.1,4.3H41V34.7z M41,34.7"></path> 
                            <path fill="#999899" d="M23.2,50.7c-3.6,5.4-2,11.2-2,11.2h3.2c0-2.9,2.3-5.2,5.2-5.2c2.9,0,5.2,2.3,5.2,5.2h6.6l0-21.2h-7.3 C30,40.7,25.4,47.2,23.2,50.7L23.2,50.7z M39.1,49.3H26.5c0,0,4.5-6.7,7.1-6.7h5.5V49.3z M39.1,49.3"></path> 
                            <path fill="#999899" d="M48.1,37.5c0-1.3,0.2-2.5,0.5-3.7H42l0,26.6v1.4h13.9c0-2.9,2.3-5.2,5.2-5.2c2.9,0,5.2,2.3,5.2,5.2h5.1 v-6.4h1.7v-7.2c-2.7,2.5-6.2,4.1-10.2,4.1C54.8,52.4,48.1,45.7,48.1,37.5L48.1,37.5z M69.2,55.5H70v3.2h-0.8V55.5z M69.2,55.5"></path> 
                            <path fill="#999899" d="M62.9,50.5c7.1,0,12.9-5.8,12.9-12.9c0-7.1-5.8-12.9-12.9-12.9c-7.1,0-12.9,5.8-12.9,12.9 C50,44.7,55.8,50.5,62.9,50.5L62.9,50.5z M62.9,26.7c6,0,10.9,4.9,10.9,10.9c0,6-4.9,10.9-10.9,10.9c-6,0-10.9-4.9-10.9-10.9 C52,31.6,56.9,26.7,62.9,26.7L62.9,26.7z M62.9,26.7"></path> 
                            <path fill="#999899" d="M62.2,39.3c0.2,0.2,0.5,0.3,0.7,0.3c0.3,0,0.5-0.1,0.7-0.3v0l6-6c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0 l-5.3,5.3l-5.3-5.3c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4L62.2,39.3z M62.2,39.3"></path> 
                            </g> </svg> 
                            Expedition sous 24h
                        </div>
                
                <!--SATISFAIT OU REMBOURSE-->
                        <div class="col-lg-2 dernier">
                            <svg version="1.1" id="satisfait" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 95 95" enable-background="new 0 0 95 95" xml:space="preserve"> 
                            <circle fill="none" stroke="#99999A" stroke-miterlimit="10" cx="47" cy="47.1" r="43.8"></circle> 
                            <path fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" d="M20.4,54.4"></path> <g> <g> 
                            <defs> <rect id="SVGID_1_" x="21.7" y="28.8" width="52.6" height="52.7"></rect> </defs> 
                            <clipPath id="SVGID_2_"> <use xlink:href="#SVGID_1_" overflow="visible"></use> </clipPath> 
                            <path clip-path="url(#SVGID_2_)" fill="#99999A" d="M32,42.7c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.5-0.2 c0.1,0,1.6-1.1,3.2-2.7c2.2-2.2,3.3-4.3,3.3-6.1c0-1.1-0.4-2.3-1.1-3.3c-0.8-1.1-1.9-1.7-3-1.7c-1.1,0-2.2,0.5-2.9,1.3 c-0.8-0.8-1.8-1.3-2.9-1.3c-1.1,0-2.2,0.6-3,1.7c-0.7,1-1.1,2.2-1.1,3.3C25.5,38.2,31.7,42.5,32,42.7L32,42.7z M32,42.7"></path> </g> 
                            <path fill="#99999A" d="M63.2,42.7c0.2,0.1,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.5-0.2c0.1,0,1.6-1.1,3.2-2.7c2.2-2.2,3.3-4.3,3.3-6.1 c0-1.1-0.4-2.3-1.1-3.3c-0.8-1.1-1.9-1.7-3-1.7c-1.1,0-2.2,0.5-2.9,1.3c-0.8-0.8-1.8-1.3-2.9-1.3c-1.1,0-2.2,0.6-3,1.7 c-0.7,1-1.1,2.2-1.1,3.3C56.6,38.2,62.9,42.5,63.2,42.7L63.2,42.7z M63.2,42.7"></path> </g> 
                            <path fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" d="M74.1,60.8"></path> 
                            <path fill="none" stroke="#99999A" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M23.5,58.1 c0,0,21.5,31.8,48.5,0"></path> 
                            </svg>
                            Enchant&eacute; ou Rembours&eacute;
                       </div>    
                    </div>
                </div>
            </div>
        </footer>
        <script src="../js/ecom.js"> </script>   
</body>
</html>
