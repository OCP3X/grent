
$(document).ready(function() {


    $('.ff_search').keyup(function() {anomaliaFinderFunction();});

    anomaliaFinderFunction();
});


    
    function anomaliaFinderFunction() {
        // Instantiating the request object
    
        var request = new XMLHttpRequest();
        // Instantiating the request object
        let anomalia = $('#anomaliaFinder').val();
        let descrizione = $('#descrizionFinder').val();
        let targa = $('#targaFinder').val();


        if (anomalia.length == 0) {
            anomalia = "*";
        }
        if (descrizione.length == 0) {
            descrizione = "*";
        }
        if (targa.length == 0) {
            targa = "*";
        }
        
        request.open("GET", "find/anomalia/" + anomalia + "/" + descrizione + "/" + targa);


        // Defining event listener for readystatechange event
        request.onreadystatechange = function() {
            // Check if the request is compete and was successful
            if (this.readyState === 4 && this.status === 200) {
                // Inserting the response from server into an HTML element
                console.log(this.responseText);
                var table = document.getElementById('table_lavagna').getElementsByTagName('tbody')[1];
                table.innerHTML = this.responseText;
            }
        };
        // Sending the request to the server
        request.send();
    }


    


function loadList() {
	var request = new XMLHttpRequest();
	request.open("GET", "lista/anomalia/");

	// Defining event listener for readystatechange event
	request.onreadystatechange = function() {
		// Check if the request is compete and was successful
		if (this.readyState === 4 && this.status === 200) {
			// Inserting the response from server into an HTML element

			var table = document.getElementById('table_lavagna').getElementsByTagName('tbody')[1];
			table.innerHTML = this.responseText;
		}
	};
	// Sending the request to the server
	request.send();
}

function confirmDelete(id_l) {



   
    bootbox.confirm({
        message: 'Vuoi eliminare la riga?',
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
                var request = new XMLHttpRequest();
                // Instantiating the request object
                request.open("GET", "delete/" + id_l);
                request.send();
                anomaliaFinderFunction();
                
            }
        
        }
        });



}

