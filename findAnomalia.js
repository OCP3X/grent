
var x = document.getElementById("anomaliaFinder");
x.addEventListener('keyup', anomaliaFinderFunction, true);

function anomaliaFinderFunction() {
	// Instantiating the request object

	var request = new XMLHttpRequest();
	// Instantiating the request object
	let text = document.getElementById("anomaliaFinder").value;
	if (text.length == 0) {
		text = "*";
	}

	request.open("GET", "find/anomalia/" + text);
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