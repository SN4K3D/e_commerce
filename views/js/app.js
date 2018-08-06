function addPanier(id_article)
{
    $.get('add_panier.php?id=' + id_article,{}, function(data)
            {
                if(data.error)
                    alert(data.message);
                else
                {
                    if(confirm(data.message + ' \n\nVoulez vous consulter votre panier ?'))
                        location.href = 'panier.php';
                    else
                    {
                    	var logo = '<i class="fas fa-shopping-cart"></i>'
                    	$('#panier_header').empty().append(logo + ' '+ data.count + ' article ' + new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(data.total));
                    }
                    
                }

            },'json');
    return false;
}
