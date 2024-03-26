$(document).ready(function() {

   var id_v = $('#id_veicolo').val();
   
if (id_v>0)   {
   get_veicolo(id_v);
}
    
$('.js-datepicker').datepicker({
   language: 'it',
   format: 'dd/mm/yyyy',
   weekStart: 1,
   
   
});

$('#find_veicoli').click(function(){ 

    $('.div_dettaglio').toggle();
    $('.div_ricerca_veicoli').toggle(); 
    $('#veicoli_descrizione_finder').trigger("focus");
    veicoli_find_veicoli();
     
});


    
$('.veicoli_display').on( "focusout", function() { 

   get_veicolo($(this).val());
    
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
      

 
 $('.div_ricerca_veicoli').toggle(); 
 $('.div_dettaglio').show();
 $('.div_dettaglio_anomalie').show();
 $('.div_table_anomalie').show();
 $('.div_button_anomalie').show();

});
}

// recupero l'id che e prendo i dati dal db
function get_veicolo(id_veicolo){
   $.get("/veicoli/find/"+ id_veicolo, function (data) {
       $('#text_descrizion').val( data.descrizione );
      $('#text_targa').val( data.targa );
      
  });
}

