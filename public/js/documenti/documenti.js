
function documenti(targa, veicolo, id_veicolo) {
    var form =
        '<div class="card">' +
        '<div class="card-body">' +
        '<input class="form-control mt-3" type="file" name="file" id="file">' +
        '<br>' +
        '<hr>' +
        '<br>' +
        '<table class="table table-striped">' +
        '<thead>' +
        '<tr>' +                    
        '<th>Descrizione</th>' +                   
        '<th>Data di creazione</th>' +
        '<th>Azioni</th>' +
        '</tr>' +
        '</thead>' +
        '<tbody id="documenti-table-body">' + 
        '</tbody>' +
        '</table>' +
        '</div>' +
        '</div>';
    
    bootbox.confirm({
        title: 'Documenti Veicolo: ' + '<b>' + targa + ' - ' + veicolo,
        message: form,
        size: 'large',
        buttons: {
            confirm: {
                label: 'Caricamento',
                className: 'btn-success'
            },
            cancel: {
                label: 'Cancella',
                className: 'btn-danger',
                style: 'display: none'
            }
        },
        callback: function (result) {
            if (result) {
                var formData = new FormData();
                formData.append('file', document.getElementById('file').files[0]);
                formData.append('id_veicolo', id_veicolo);

                var requestd = new XMLHttpRequest();
                requestd.open("POST", "/teste/upload/" + id_veicolo);
                requestd.onload = function () {
                    if (requestd.status === 200) {
                        console.log(this.responseText);

                        requestData(); 
                    } else {
                        console.error('Errore nella richiesta: ' + requestd.status);
                        bootbox.alert('Errore durante l´aggiunta del record. Per favore riprova. Dimensione massima del file 2 MB');
                    }
                };

                requestd.onerror = function () {
                    console.error('Errore di rete');
                    bootbox.alert('Errore di rete durante l´aggiunta del record. Per favore riprova.');
                };

                requestd.send(formData);                

                return false;
            }                   
        }                
    });            

    var requestData = function() {

        var request = new XMLHttpRequest();
        request.open("GET", "list/documenti/" + id_veicolo);
        request.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var datos = JSON.parse(this.responseText);

                var tableRows = ''; 
                
                datos.forEach(function (dato) {
                    console.log(dato.path)
                    var row = '<tr>' +                       
                        '<td>' + dato.description + '</td>' +                       
                        '<td>' + dato.created_at + '</td>' +
                        '<td><a style="font-size:10px;" type="button" class="btn btn-primary btn-xs" href=" ' + dato.path + '" download> <i class="fa-solid fa-download"></i> </a> <button style="font-size:10px;" type="button" class="btn btn-danger btn-xs" href="javascript:void(0)" onclick="elimina(\'' + targa + '\',\'' + veicolo + '\',\'' + id_veicolo + '\',\'' + dato.description + '\',\'' + dato.idfile + '\')"> <i class="fa-solid fa-trash"></i> </button></td>' +
                        '</tr>';    
                    
                    tableRows += row;
                });   
                
                var tableBody = document.getElementById('documenti-table-body');
                tableBody.innerHTML = tableRows;
            }
        };

        request.send();
    };

    requestData(); 
}

function elimina(targa, veicolo, id_veicolo, file, id) {  
     
    bootbox.confirm({
        title: 'Elimina File',
        message: 'Vuoi eliminare il File: ' + '<b>'+ file + '</b>',
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
            if (result) {
                var request = new XMLHttpRequest();
                request.open("GET", "/teste/elimina/" + id);                
                
                request.setRequestHeader('Content-Type', 'application/json');
                
                request.onload = function () {
                    if (request.status === 200) {                        
                        bootbox.hideAll();
                        documenti(targa, veicolo, id_veicolo);
                    } else {
                        console.error('Error en la solicitud: ' + request.status);
                    }
                };        
                
                request.onerror = function () {
                    console.error('Error de red');
                };       
                
                request.send();
            }
        }
    });   
}
