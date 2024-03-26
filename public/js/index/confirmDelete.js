
function confirmDelete(e) {
	let text = "Sei sicuro di voler cancellare l'anomalia? '" + e + "'";
	if (confirm(text) == true) {
		var request = new XMLHttpRequest();
		// Instantiating the request object
		request.open("GET", "delete/" + e);
		request.send();
	}
	location.reload();
}