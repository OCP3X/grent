



$(document).ready(function() {

var t = document.getElementById("targaFinder");
t.addEventListener('keyup', anomaliaFinderFunction, true);
var a = document.getElementById("anomaliaFinder");
a.addEventListener('keyup', anomaliaFinderFunction, true);
var d = document.getElementById("descrizionFinder");
d.addEventListener('keyup', anomaliaFinderFunction, true);


});

function anomaliaFinderFunction() {
	// Instantiating the request object

	var request = new XMLHttpRequest();
	// Instantiating the request object
	let anomalia = a.value;
	let descrizione = d.value;
	let targa = t.value;
	if (anomalia.length == 0) {
		anomalia = "*";
	}
	if (descrizione.length == 0) {
		descrizione = "*";
	}
	if (targa.length == 0) {
		targa = "*";
	}
	
	if (anomalia == "*" && descrizione == "*" && targa == "*") {
	request.open("GET", "lista/anomalia/");
	} else {
	  request.open("GET", "find/anomalia/" + anomalia + "/" + descrizione + "/" + targa);
	}
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