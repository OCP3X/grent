$(document).ready(function() {








$(".btnDeleteTesta").click(function(){
	var id_testa = $(this).attr("data_id_testa");


  
		bootbox.confirm({
			message: 'Vuoi eliminare il documento?',
			buttons: {
			confirm: {
			label: 'SI',
			className: 'btn-success'
			},
			cancel: {
			label: 'No',
			className: 'btn-danger'
			}
			},
			callback: function (result) {
				if (result){

					// per ora mando tutto e faccio il reload della pagina
					var url = "/teste/delete/"+ id_testa;
					window.location = url;
					
					
				}
			
			}
			});
	
	
	

	

});



});


