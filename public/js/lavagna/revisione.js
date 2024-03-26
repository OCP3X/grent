
    
        var request = new XMLHttpRequest();
        
        request.open("GET", "list/revisione");        
        
        request.onreadystatechange = function() {
            
            if (this.readyState === 4 && this.status === 200) {
               
                var datos = JSON.parse(this.responseText); // Parsea los datos JSON
                                
                 const miTabla = $('#dati').DataTable({
                    "data": datos,
                    "columns": [
                        //columnas  
                        { "data": "id_l", "title": "<b>idl<b>","visible": false },                                                                     
                        { "data": "targa", "title": "<b>TARGA</b>" },                       
                        { "data": "Tipo_Revisione", "title": "<b>TIPO REVISIONE</b>" },
                        { "data": "data", "title": "<b>ULTIMI DATI</b>" },
                        { "data": "collaudo_pross", "title": "<b>PROSSIMA DATA</b>" },                                             
                       {
                        "data": "collaudo_alert",
                        "title": "<b>DATA ALERT</b>",
                        "render": function (data, type, row) {
                          var fechaLimite = new Date();
                          fechaLimite.setDate(fechaLimite.getDate() + 30);                      
                          var fechaCollaudo = new Date(row.collaudo_alert);                          
                          if (fechaCollaudo <= fechaLimite) {
                            return '<span class="spinner-grow text-danger spinner-grow-sm"></span> <b>' + row.collaudo_alert + '</b>';
                          } else {
                            return '<b>' + row.collaudo_alert + '</b>';
                          }
                        }
                      },                               
                        {
                            "data": "id_l",
                            "title": "<b>AZIONI</b>",
                            "render": function (data, type, row) {                                                            
                                var id = row.id_l;
                                var targa = row.targa;
                                var fecha = row.data;
                                var tipo = row.Tipo_Revisione;                              
                                return '<button style="font-size:10px;" type="button" class="btn btn-primary btn-xs" href="javascript: void(0)" onclick="aggiorna(\'' + targa + '\',\'' + fecha + '\',' + id + ',\'' + tipo + '\')"> <i class="fa-solid fa-edit"></i> </button>';
                            }                            
                          },
                    ],
                    "order": [[4, 'asc']],
                    "language": {
                        "sEmptyTable":     "Nessun dato disponibile nella tabella",
                        "sInfo":           "Visualizzazione da _START_ a _END_ di _TOTAL_ elementi",
                        "sInfoEmpty":      "Visualizzazione da 0 a 0 di 0 elementi",
                        "sInfoFiltered":   "(filtrati da _MAX_ elementi totali)",
                        "sInfoPostFix":    "",
                        "sInfoThousands":  ",",
                        "sLengthMenu":     "Visualizza _MENU_ elementi",
                        "sLoadingRecords": "Caricamento...",
                        "sProcessing":     "Elaborazione...",
                        "sSearch":         "Cerca:",
                        "sZeroRecords":    "La ricerca non ha portato alcun risultato.",
                        "oPaginate": {
                            "sFirst":      "Inizio",
                            "sPrevious":   "Precedente",
                            "sNext":       "Successivo",
                            "sLast":       "Fine"
                        },
                        "oAria": {
                            "sSortAscending":  ": attiva per ordinare la colonna in ordine crescente",
                            "sSortDescending": ": attiva per ordinare la colonna in ordine decrescente"
                        }
                    }
                });          
               
            }
        };
        // Sending the request to the server
        request.send();
  
       

function aggiorna(targa, fecha, id, tipo) { 
  var tipo_name = '';
  if(tipo == 'Collaudo'){
    tipo_name = 'collaudo';
  } if(tipo == 'Tachigrafi'){
    tipo_name = 'tachigrafi';
  } if(tipo == 'Estintori'){
    tipo_name = 'estintori';
  } if(tipo == 'Casetta Pronto Soccorso'){
    tipo_name = 'casetta_ps';
  } if(tipo == 'Sistema Antincendio Pullman'){
    tipo_name = 'sistema_ap';
  } 
       
 var form = '<div class="card">' +
            '<div class="card-header"> <b>Targa '+targa+'</b></div>' +
                '<div class="card-body">' +
                        '<form>' +
                    '<div class="row">' +
                            '<div class="col-12">' +
                                '<div class="form-group">' +
                                    '<label for="'+tipo_name+'"> '+tipo+':</label>' +
                                    '<input type="date" class="form-control" id="'+tipo_name+'" name="'+tipo_name+'" ' + (fecha ? 'value="' + fecha + '"' : '') + '>' +                                   
                                '</div>' +
                            '</div>' +                           
                    '</div>' +
                '</div>' +
            '<br>' +            
            '</form>' +
            '</div>' +
            '</div>'        
            ;
          
            bootbox.confirm({
                title: 'Edit Revisione',               
                message: form,
                size: 'medium',        
                buttons: {
                    confirm: {
                        label: 'Aggiungi',
                        className: 'btn-success',                       
                    },
                    cancel: {
                        label: 'Cancella',
                        className: 'btn-danger'
                    }
                },          
            
                callback: function (result) {
                    if (result) {
                        var request = new XMLHttpRequest();
                        var formData = {
                            targa: targa,
                            tipo: tipo_name,                           
                            value: $('#'+tipo_name+'').val(),                           
                        };
                        console.log(tipo_name)
                        request.open("POST", "/revisione/aggiorna_edit/");
                        // No es necesario establecer encabezados aquí
                        ;
                        request.onload = function () {                            
                            if (request.status === 200) {
                               // console.log(this.responseText); 
                                // La solicitud fue exitosa, maneja la respuesta si es necesario                               
                                window.location.reload();
                            } else {
                                // Hubo un error en la solicitud
                                console.error('Errore nella richiesta: ' + request.status);
                                // Muestra un mensaje de error al usuario
                                bootbox.alert('Errore durante l´aggiunta del record. Per favore riprova.');
                            }
                        };
                
                        request.onerror = function () {
                            console.error('Errore di rete');
                            // Muestra un mensaje de error al usuario
                            bootbox.alert('Errore di rete durante l´aggiunta del record. Per favore riprova.');
                        };
                
                        request.send(JSON.stringify(formData));
                    }
                }
               
                });        
        }

