<!DOCTYPE html>
<html>
<head>
	<title>Article</title>
	<?php include '../include/include.php'; ?>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="../css/article.css" />
	<script type="text/javascript" src="../js/app.js"></script> 

</head>
<body>
	<?php include '../include/header.php'; ?>
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content product-item">
						  <div class="tab-pane active pi-img-wrapper" id="pic-1">
		                		<img class="img-responsive" src="../image/<?= $article->get('id_article'); ?>.jpg" />
		                		<div>
			                  		<a target="_blank" href="../image/<?= $article->get('id_article'); ?>.jpg" class="btn">Image</a>
			               		</div>
		               	   </div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="../image/<?= $article->get('id_article'); ?>.jpg" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?= $article->get('nom_produit'); ?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description"><?=$article->get('description')?></p>
						<h4 class="price">Prix: <span><?=$article->get('prix_unitaire') ?> €</span></h4>
						<p class="vote"><strong>91%</strong> des acheteur sont satisfait par ce produit ! <strong>(87 votes)</strong></p>
						<div class="action">
							<button class="add-to-cart btn btn-default" onclick="addPanier(<?php echo $article->get('id_article')?>)" type="button">Ajouter au panier</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</main>
</body>
</html>