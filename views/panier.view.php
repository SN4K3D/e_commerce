<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
    <?php include '../include/include.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/panier.css" />
</head>
<body>
    <?php include '../include/header.php';?>
    <div class="container-text">  Mon panier </div>
    <?php if(isset($_SESSION['prix_total']) AND $panier->count() > 0): ?>
    <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Produits</th>
                        <th>Quantité</th>
                        <th class="text-center">Prix unitaire</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody >
                    <?php foreach ($mes_articles as $article): $sous_total = $article->prix_unitaire * $_SESSION['panier'][$article->id_article];?>
                    <tr>
                    <td class="col-sm-8 col-md-8">
                        <div class="media">
                            <a class="thumbnail pull-left" href="article.php?id_article=<?=$article->id_article?>"> <img class="media-object" src="../image/<?=$article->id_article?>.jpg" alt="image_produit"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="article.php?id_article=<?=$article->id_article?>"><?=$article->nom_produit?></a></h4>
                                <h5 class="media-heading"> De <a target="_blank" href="https://cvjolivet.000webhostapp.com">Snake</a></h5>
                                <span>Status: </span><span class="text-success"><strong>En Stock</strong></span>
                            </div>
                        </div>
                    </td>
                        <td id="article" class="col-sm-1 col-md-1">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="<?=$_SESSION['panier'][$article->id_article]?>">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?= number_format($article->prix_unitaire,2,',','') ?>€</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?=number_format($sous_total,2,',','')?>€</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" onclick="document.location.href='panier.php?del=<?=$article->id_article?>'" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Supprimer
                        </button>
                    </td>
                    </tr>
                    <?php endforeach ?>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Sous-total</h5></td>
                        <td class="text-right"><h5><strong><?=number_format($_SESSION['prix_total'],2,',','')?>€</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Frais de port</h5></td>
                        <td class="text-right"><h5><strong><?= number_format($frait_port,2,',','') ?> €</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><?= $total ;?>€</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" onclick="document.location.href='acceuil.php'" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continuer les achats
                        </button></td>
                        <td>
                        <button type="button" onclick="document.location.href='commande.php'" class="btn btn-success">
                            Passer Commande <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php else: ?> 
<div id="erreur"  class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div  class="col-md-12 text-center">
                <span class="display-1 d-block">Panier Vide</span>
                <div class="mb-4 lead">Vous n'avez pas encor selectionner d'articles</div>
                <a href="acceuil.php" class="btn btn-link">Retour a l'acceuil</a>
            </div>
        </div>
    </div>
</div>
<?php endif ?>
</body>
</html>