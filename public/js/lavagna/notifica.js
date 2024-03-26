
    
        var request_noti = new XMLHttpRequest();
        
        request_noti.open("GET", "notifica/revisione");        
        
        request_noti.onreadystatechange = function() {
            
            if (this.readyState === 4 && this.status === 200) {
               
                var datos = JSON.parse(this.responseText); // Parsea los datos JSON
                console.log(datos.length);              
                document.getElementById("noti").innerHTML = datos.length;
               
            }
        };
        // Sending the request to the server
        request_noti.send();