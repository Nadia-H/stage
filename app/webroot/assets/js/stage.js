$(document).ready(function() {
	$(".ajouterligne2").click(function() {


		ajouter_ligne('table','index');});


/*
	$(".add").click(function() {
		var name = $("#nom").html();
		var qte = $("#qte").html();
		var btn = $("#btn").html();
		console.log(name)
		var ligne =  "<tr><td><input type='checkbox' name='select'></td><td id='nom'>"+name+"</td><td id='qte'>"+qte+"</td></tr>";
		$("table").append(ligne);
	});
	$(".delete").click(function() {
		$("table").find('input[name="select"]').each(function() {
			if ($(this).is(":checked")) {
				$(this).parents("tr").remove();
			}
		});
	});*/
});
function ajouter_ligne(table,index){
	ind=Number($('#'+index).val())+1;
	$ttr =$('#'+table).find('.tr').clone(true);
	$ttr.attr('class','');
	i=0;tabb=[];
	$ttr.find('input,select').each(function(){
		tab = $(this).attr('table');
		champ = $(this).attr('champ');
		$(this).attr('index',ind);
		$(this).attr('id',champ+ind);
		$(this).attr('name','data['+tab+']['+ind+']['+champ+']');
		$(this).attr('data-bv-field','data['+tab+']['+ind+']['+champ+']');
		$(this).removeClass('anc');
		if($(this).is('select')){
			tabb[i]=champ+ind;
			i=Number(i)+1;
		}
		$(this).val('');

	})
	$ttr.find('i').each(function(){
		$(this).attr('index',ind);
	});
	$('#'+table).append($ttr);
	$('#'+index).val(ind);
	$('#'+table).find('tr:last').show();
	for(j=0;j<=i;j++){
		uniform_select(tabb[j]);
	}

}

	$('form').each(function() {
		var qt = $(this).find("input[name='qt']").val();
		var prix = $(this).find("input[name='prix']").val();
		var total = qt * prix;
		$(this).find('span.montant').append(total);
	});

