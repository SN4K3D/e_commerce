<!DOCTYPE html>
<html>
<head>
    <title>Commande</title>
    <?php include '../include/include.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/validation_commande.css" />
</head>
<body>

<!--Model Popup starts-->
<div class="container">
    <div class="row">
        <a id="continuer" class="btn btn-primary" data-toggle="modal" href="#ignismyModal">Continuer</a>
        <div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
                    
                    <div class="modal-body">
                       
                        <div class="thank-you-pop">
                            <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                            <h1>Merci !</h1>
                            <p>Votre commande a bien été validé</p>
                            <h3 class="cupon-pop">Numéro de commande: <span><?= $panier->getLastIdCommande() ?></span></h3>
                            <a href="../index.php"><h4>Retour a l'acceuil.</h4></a>
                            
                        </div>
                         
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--Model Popup ends-->

</body>
</html>