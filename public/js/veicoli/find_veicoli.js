$(document).ready(function() {
    
   
$('#chiudi_veicoli').click(function(){
   // comunque chiudo la ricerca
   $('.div_ricerca_veicoli').hide(); 
   // funzione esterna da creare a seconda del contesto
   veicoli_ext_chiudi_veicoli();

});


$('.veicoli_txt_ricerca').keyup(function() {
   veicoli_find_veicoli();
});



});

function veicoli_find_veicoli(){

   var targa = "";
   var t = $('#veicoli_targa_finder');
   
   if (t.val() == '') {
      targa = "*";
   } else {
      targa = t.val();
   }
 
   var destinazione = "";
   var d = $('#veicoli_descrizione_finder');
   if (d.val() == '') {
        destinazione = "*" ;
   } else {
     destinazione = d.val();
   }
 
   
   $.get("/veicoli/find/all/"+ destinazione+ "/" + targa, function (data) {
        // Iterate the groups first.
        $('#veicoli_to_update').html(data);
         // funzione esterna da creare a seconda del contesto
        veicoli_ext_bind_lista_veicoli();
    });


}


