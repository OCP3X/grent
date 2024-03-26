
window.onload = loadList;

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


