$(document).ready(function() {


	var id_v = $('#id_veicolo').val();
   
	if (id_v>0)   {
	   get_veicolo(id_v);
	}

	carica_lista_righe();






// nascondo la barra laterale

/*
$('#sidebar').toggleClass('active');
if ($('#sidebar').hasClass('active')) {

} 
*/

if (terminato>0){

	$('#div_dettaglio_testa').find('input, textarea').attr('readonly', 'readonly');
	$('#div_dettaglio_testa').find('select').attr('disabled', 'true');
	$('.btnModifica').hide();
	$('.btnBack2Lista').show();
	$('.btnSalva').hide();
	$('.btnAnnulla').hide();
	$('.btnAnomaliaLavagna').hide();
	$('.btnNuovaAnomalia').hide();
	$('.btnStampaDoc').show();
	$('#div_lista_righe').show();
	$('#div_dettaglio_riga').hide();
	$('#find_veicoli').hide();

}else{



	if (ok_modifica>0){
		
		//$('.div_dettaglio_testa').toggle();
		$('.btnModifica').hide();
		$('.btnBack2Lista').hide();
		$('.btnSalva').show();
		$('.btnAnnulla').show();
		$('.btnStampaDoc').hide();
		$('#div_dettaglio_testa').removeClass('no_modifica')
		$('#div_dettaglio_testa').addClass('modifica')
		$('#div_lista_righe').hide();
		$('#div_dettaglio_riga').hide();
		$('#find_veicoli').show();
		$('.js-datepicker').datepicker({
			format: 'dd/mm/yyyy'
		});
		
	}else{
		$('#div_dettaglio_testa').find('input, textarea').attr('readonly', 'readonly');
		$('#div_dettaglio_testa').find('select').attr('disabled', 'true');
		$('.btnModifica').show();
		$('.btnBack2Lista').show();
		$('.btnSalva').hide();
		$('.btnAnnulla').hide();
		$('.btnStampaDoc').show();
		$('#div_dettaglio_testa').removeClass('modifica')
		$('#div_dettaglio_testa').addClass('no_modifica')
		$('#div_lista_righe').show();
		$('#div_dettaglio_riga').hide();
		
		$('#find_veicoli').hide();
	}

}





$('#find_veicoli').click(function() {
	$('.div_dettaglio').hide();
	$('.div_ricerca_veicoli').show();
	$('.div_ricerca_anomalia').hide();
	$('#veicoli_descrizione_finder').trigger("focus");
	veicoli_find_veicoli();
	
	
});


$('.veicoli_display').on( "focusout", function() { 

	get_veicolo($(this).val());
	 
 });

 

$('.btnAnomaliaLavagna').click(function() {
	$('.div_dettaglio').hide();
	$('.div_ricerca_veicoli').hide(); 
	$('.div_ricerca_anomalia').show();
	carica_lista_anomalie_lavagna();
	});




$(".btnModifica").click(function(){
	$("#ok_modifica").val(1);
	$("#form_dettaglio").submit();

});

$(".btnChiudiAnomali").click(function(){
	$('.div_dettaglio').show();
	$('.div_ricerca_veicoli').hide(); 
	$('.div_ricerca_anomalia').hide();
	carica_lista_righe();

});



});




//////////////////// funzioni legate alla ricerca veicoli ma esterni

function veicoli_ext_chiudi_veicoli(){

	$('.div_dettaglio').toggle();
 
	
 
	};
	
	 
  function veicoli_ext_bind_lista_veicoli(){
	
	$(".veicoli_ext_select_veicolo").click(function(){
	   var id=$(this).attr("data_id_veicolo");
	   $('#id_veicolo').val( id );    
	   get_veicolo(id);
	   
 
  
  $('.div_ricerca_veicoli').hide(); 
  $('.div_dettaglio').show();
  //$('.div_dettaglio_anomalie').hide();
  //$('.div_table_anomalie').show();
  //$('.div_button_anomalie').show();
 
 });
 }
 
 // recupero l'id che e prendo i dati dal db
 function get_veicolo(id_veicolo){
	$.get("/veicoli/find/"+ id_veicolo, function (data) {
		$('#text_descrizion').val( data.descrizione );
	   $('#text_targa').val( data.targa );
   });
 }
 


function carica_lista_anomalie_lavagna(){
	$.get("/lavagna/find/anomalie/veicoli/" + $('#id_veicolo').val(),
		function(data) { // Iterate the groups first.
			$('#list_anomalie_to_update').html(data);
			anomalia_bind();
	
		}); 
}


 function anomalia_bind(){
	$(".btnSelAnomalia").click(function(){
		
		var id_l = $(this).attr("data_id_l");
		var url = "/righe/evadi_lavagna/"+php_id_testa+"/"+id_l;
		$.get(url, function () {
			// devo ricaricare la lista righe
			carica_lista_anomalie_lavagna();
	   });

	});
 }
 

 function carica_lista_righe(){
	
	$.get("/righe/testa/"+ php_id_testa, function (data) {
		$('#tbody_righe').html( data );
		
	   if(terminato>0){
		$('.btnDettaglioRiga ').hide();
		$('.btnDeleteRiga  ').hide();
		
	   }
		$(".btnDeleteRiga").click(function(){
			var id_riga = $(this).attr("data_id_riga");
			var url = "/righe/delete/"+id_riga;
			$.get(url, function () {
				// devo ricaricare la lista righe
				carica_lista_righe();
		   });
		});

		
	   
   });
 }

