$(document).ready(function()
{
	$(".supgff").on('click',function() {
		index=$(this).attr('index');
		$('#sup'+index).val('1');
		//alert(index);
		$(this).parent().parent().hide();
		calcule();
	});


	$(".calculefacfournisseur").keyup(function() {
		calcule();
	});


	$('.prixz').on('change',function(){

		index=$(this).attr('index');
		id=$(this).val();
		//alert(id);
		$.ajax({
		type: "POST",
		url: wr + "Factures/listeprix/",
		dataType: "json",
		data: {'article_id': id}
	}).done(function (data) {
		console.log(data.prix);
		$('#prix' + index).val(data.prix);
			calcule();

		});

})



});

function calcule(){


	index=$('#index').val();
	total=0;
	for(var i=0;i<=index;i++)
	{ ligne_totale=0;
		if($('#sup'+i).val()!=1) {
		qte = $('#qte' + i).val() || 0;
		prix = $('#prix' + i).val() || 0;
		ligne_totale=qte * prix;
		$('#t'+i).val(ligne_totale.toFixed(3));
		total = total + qte * prix;

	}
	}
	$('#total').val(total.toFixed(3));


}



