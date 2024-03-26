
    
        var request = new XMLHttpRequest();
        
        request.open("GET", "list/VeicoliInfo");        
        
        request.onreadystatechange = function() {
            
            if (this.readyState === 4 && this.status === 200) {
               
                var datos = JSON.parse(this.responseText); // Parsea los datos JSON
                //console.log(datos);
                
                 const miTabla = $('#dati').DataTable({
                    "data": datos,
                    "columns": [
                        //columnas  
                        { "data": "id_l", "title": "<b>idl<b>","visible": false },                                                                     
                        { "data": "targax", "title": "<b>Targa<b>" },                       
                        { "data": "descrizion", "title": "descrizion" },
                        { "data": "telaio", "title": "Telaio" },
                        { "data": "anno", "title": "Anno" },
                        { "data": "dimensioni", "title": "Dimensioni" },
                        {
                            "data": "id_l",
                            "title": "Azioni",
                            "render": function (data, type, row) {
                                var btn_view;
                                var btn_pdf;                               
                                var id = row.id_l;
                                var targa = row.targax;
                                var id_l = row.id_l;
                                if(row.targa != null){
                                btn_view = '<button style="font-size:10px;" type="button" class="btn btn-success btn-xs" href="javascript: void(0)" onclick="view(\'' + targa + '\', ' + JSON.stringify(row).replace(/"/g, '&quot;') + ')"> <i class="fa-solid fa-search"></i> </button>';
                                btn_pdf = '<a style="font-size:10px;" type="button" class="btn btn-secondary btn-xs" href="/VeicoliInfo/stampa_veicolo_info/1/' + targa + '"> <i class="fa fa-file-pdf"></i> </a>';                               
                            }else{
                                btn_view = '';
                                btn_pdf = '';
                                }
                                return ' '+btn_view+' '+btn_pdf+'  <button style="font-size:10px;" type="button" class="btn btn-primary btn-xs" href="javascript: void(0)" onclick="aggiorna(\'' + targa + '\', ' + JSON.stringify(row).replace(/"/g, '&quot;') + ')"> <i class="fa-solid fa-edit"></i> </button> <button style="font-size:10px;" type="button" class="btn btn-danger btn-xs" href="javascript: void(0)" onclick="confirmDelete('+id+')"> <i class="fa-solid fa-trash"></i> </button>';
                            }                            
                          },
                    ],
                    "order": [[0, 'desc']],
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
  
        function confirmDelete(id) {   
            bootbox.confirm({
                title: 'Elimina Veicolo',
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
                    if (result) {
                        var request = new XMLHttpRequest();
                                       
                        // Configura los encabezados para permitir solicitudes desde cualquier origen (*)
                        request.open("GET", "delete/" + id);
                        request.setRequestHeader('Content-Type', 'application/json');
                        request.setRequestHeader('Access-Control-Allow-Origin', '*');
                
                        // Manejador de éxito
                        request.onload = function () {
                            if (request.status === 200) {
                                // La solicitud fue exitosa, maneja la respuesta si es necesario
                                //console.log(request.responseText);
                                window.location.reload();
                               request.send();
                            } else {
                                // Hubo un error en la solicitud
                                console.error('Error en la solicitud: ' + request.status);
                            }
                        };
                
                        // Manejador de error de red
                        request.onerror = function () {
                            console.error('Error de red');
                        };
                
                        // Envía la solicitud
                        request.send();
                    }
                }
                
                });   
        
        }

        function aggiorna(targa, row) {
            
 var form = '<div class="card">' +
            '<div class="card-header"> <b>Targa '+targa+'</b></div>' +
                '<div class="card-body">' +
                        '<form id="deleteForm">' +
                    '<div class="row">' +
                            '<div class="col-6">' +
                                '<div class="form-group">' +
                                    '<label for="telaio">Telaio:</label>' +
                                    '<input type="text" class="form-control" id="telaio" name="telaio" ' + (row.telaio ? 'value="' + row.telaio + '"' : '') + '>' +
                                    '<label for="anno">Anno:</label>' +
                                    '<input type="text" class="form-control" id="anno" name="anno" ' + (row.anno ? 'value="' + row.anno + '"' : '') + '>' +
                                    '<label for="dimensioni">Dimensione:</label>' +
                                    '<input type="text" class="form-control" id="dimensioni" name="dimensioni" ' + (row.dimensioni ? 'value="' + row.dimensioni + '"' : '') + '>' +
                                    '<label for="modello_motore">Modello Motore:</label>' +
                                    '<input type="text" class="form-control" id="modello_motore" name="modello_motore" ' + (row.modello_motore ? 'value="' + row.modello_motore + '"' : '') + '>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col-6">' +
                                '<div class="form-group">' +
                                    '<label for="modello_colore">Modello Colore:</label>' +
                                    '<input type="text" class="form-control" id="modello_colore" name="modello_colore" ' + (row.modello_colore ? 'value="' + row.modello_colore + '"' : '') + '>' +
                                    '<label for="scadenza_garanzia">Scadenza Garanzia:</label>' +
                                    '<input type="text" class="form-control" id="scadenza_garanzia" name="scadenza_garanzia" ' + (row.scadenza_garanzia ? 'value="' + row.scadenza_garanzia + '"' : '') + '>' +
                                    '<label for="obra">Obra:</label>' +
                                    '<input type="text" class="form-control" id="obra" name="obra" ' + (row.obra ? 'value="' + row.obra + '"' : '') + '>' +
                                    '<label for="posti">Posti:</label>' +
                                    '<input type="text" class="form-control" id="posti" name="posti" ' + (row.posti ? 'value="' + row.posti + '"' : '') + '>' +
                                    '<label for="nm_motore">Nm Motore:</label>' +
                                    '<input type="text" class="form-control" id="nm_motore" name="nm_motore" ' + (row.nm_motore ? 'value="' + row.nm_motore + '"' : '') + '>' +
                                '</div>' +
                            '</div>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<br>' +
            //Revisione
             '<div class="card">' +
            '<div class="card-header"> Controllo Revisioni Periodiche </div>' +
                '<div class="card-body">' +           
                    '<div class="form-group">' +
                        '<label for="collaudo">Collaudo:</label>' +
                        '<input type="date" class="form-control" id="collaudo" name="collaudo" ' + (row.collaudo ? 'value="' + row.collaudo + '"' : '') + '>' +
                        '<label for="tachigrafi">Tachigrafi:</label>' +
                        '<input type="date" class="form-control" id="tachigrafi" name="tachigrafi" ' + (row.tachigrafi ? 'value="' + row.tachigrafi + '"' : '') + '>' +
                        '<label for="estintori">Estintori:</label>' +
                        '<input type="date" class="form-control" id="estintori" name="estintori" ' + (row.estintori ? 'value="' + row.estintori + '"' : '') + '>' +
                        '<label for="casetta_ps">Casetta Pronto Soccorso:</label>' +
                        '<input type="date" class="form-control" id="casetta_ps" name="casetta_ps" ' + (row.casetta_ps ? 'value="' + row.casetta_ps + '"' : '') + '>' +
                        '<label for="sistema_ap">Sistema Antincendio Pullman:</label>' +
                        '<input type="date" class="form-control" id="sistema_ap" name="sistema_ap" ' + (row.sistema_ap ? 'value="' + row.sistema_ap + '"' : '') + '>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '</br>' + 
            //olio
            '<div class="card">' +
            '<div class="card-header"> <div class="row"> <div class="col-4">Tipo/Codice </div> <div class="col-4">Quantitá/Durata</div> <div class="col-4">Fornitore</div></div></div>' +
                    '<div class="card-body">' +           
                        '<div class="row">' +
                            '<div class="col-4">' +
                                '<div class="form-group">' +
                                        '<label for="tipo_olio_cambio_tc">Tipo Olio Cambio:</label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_cambio_tc"  name="tipo_olio_cambio_tc" ' + (row.tipo_olio_cambio_tc ? 'value="' + row.tipo_olio_cambio_tc + '"' : '') + '>' +
                                        '<label for="tipo_olio_diff_tc">Tipo Olio Diff:</label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_diff_tc"  name="tipo_olio_diff_tc" ' + (row.tipo_olio_diff_tc ? 'value="' + row.tipo_olio_diff_tc + '"' : '') + '>' +
                                        '<label for="tipo_olio_rallentatore_tc">Tipo Olio Rallentatore:</label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_rallentatore_tc"  name="tipo_olio_rallentatore_tc" ' + (row.tipo_olio_rallentatore_tc ? 'value="' + row.tipo_olio_rallentatore_tc + '"' : '') + '>' +
                                        '<label for="tipo_olio_idroventola_tc">Tipo Olio Idroventola:</label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_idroventola_tc"  name="tipo_olio_idroventola_tc" ' + (row.tipo_olio_idroventola_tc ? 'value="' + row.tipo_olio_idroventola_tc + '"' : '') + '>' +            
                                        '<label for="olio_mozzi_ant_tc">Olio Mozzi Ant:</label>' +
                                        '<input type="text" class="form-control" id="olio_mozzi_ant_tc" " name="olio_mozzi_ant_tc" ' + (row.olio_mozzi_ant_tc ? 'value="' + row.olio_mozzi_ant_tc + '"' : '') + '>' +
                                        '<label for="olio_mozzi_post_tc">Olio Mozzi Post:</label>' +
                                        '<input type="text" class="form-control" id="olio_mozzi_post_tc"  name="olio_mozzi_post_tc" ' + (row.olio_mozzi_post_tc ? 'value="' + row.olio_mozzi_post_tc + '"' : '') + '>' +
                                        '<label for="altro_olio_tc">Altro Olio:</label>' +
                                        '<input type="text" class="form-control" id="altro_olio_tc"  name="altro_olio_tc" ' + (row.altro_olio_tc ? 'value="' + row.altro_olio_tc + '"' : '') + '>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col-4">' +
                                '<div class="form-group">' +
                                        '<label for="tipo_olio_cambio_qd"></label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_cambio_qd" name="tipo_olio_cambio_qd" ' + (row.tipo_olio_cambio_qd ? 'value="' + row.tipo_olio_cambio_qd + '"' : '') + '>' +
                                        '<label for="tipo_olio_diff_qd"></label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_diff_qd" name="tipo_olio_diff_qd" ' + (row.tipo_olio_diff_qd ? 'value="' + row.tipo_olio_diff_qd + '"' : '') + '>' +
                                        '<label for="tipo_olio_rallentatore_qd"></label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_rallentatore_qd" name="tipo_olio_rallentatore_qd" ' + (row.tipo_olio_rallentatore_qd ? 'value="' + row.tipo_olio_rallentatore_qd + '"' : '') + '>' +
                                        '<label for="tipo_olio_idroventola_qd"></label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_idroventola_qd" name="tipo_olio_idroventola_qd" ' + (row.tipo_olio_idroventola_qd ? 'value="' + row.tipo_olio_idroventola_qd + '"' : '') + '>' +            
                                        '<label for="olio_mozzi_ant_qd"></label>' +
                                        '<input type="text" class="form-control" id="olio_mozzi_ant_qd" name="olio_mozzi_ant_qd" ' + (row.olio_mozzi_ant_qd ? 'value="' + row.olio_mozzi_ant_qd + '"' : '') + '>' +
                                        '<label for="olio_mozzi_post_qd"></label>' +
                                        '<input type="text" class="form-control" id="olio_mozzi_post_qd" name="olio_mozzi_post_qd" ' + (row.olio_mozzi_post_qd ? 'value="' + row.olio_mozzi_post_qd + '"' : '') + '>' +
                                        '<label for="altro_olio_qd"></label>' +
                                        '<input type="text" class="form-control" id="altro_olio_qd" name="altro_olio_qd" ' + (row.altro_olio_qd ? 'value="' + row.altro_olio_qd + '"' : '') + '>' +
                                '</div>' +
                            '</div>' +

                            '<div class="col-4">' +
                                '<div class="form-group">' +
                                        '<label for="tipo_olio_cambio_f"></label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_cambio_f" name="tipo_olio_cambio_f" ' + (row.tipo_olio_cambio_f ? 'value="' + row.tipo_olio_cambio_f + '"' : '') + '>' +
                                        '<label for="tipo_olio_diff_f"></label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_diff_f" name="tipo_olio_diff_f" ' + (row.tipo_olio_diff_f ? 'value="' + row.tipo_olio_diff_f + '"' : '') + '>' +
                                        '<label for="tipo_olio_rallentatore_f"></label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_rallentatore_f" name="tipo_olio_rallentatore_f" ' + (row.tipo_olio_rallentatore_f ? 'value="' + row.tipo_olio_rallentatore_f + '"' : '') + '>' +
                                        '<label for="tipo_olio_idroventola_f"></label>' +
                                        '<input type="text" class="form-control" id="tipo_olio_idroventola_f" name="tipo_olio_idroventola_f" ' + (row.tipo_olio_idroventola_f ? 'value="' + row.tipo_olio_idroventola_f + '"' : '') + '>' +            
                                        '<label for="olio_mozzi_ant_f"></label>' +
                                        '<input type="text" class="form-control" id="olio_mozzi_ant_f" name="olio_mozzi_ant_f" ' + (row.olio_mozzi_ant_f ? 'value="' + row.olio_mozzi_ant_f + '"' : '') + '>' +
                                        '<label for="olio_mozzi_post_f"></label>' +
                                        '<input type="text" class="form-control" id="olio_mozzi_post_f" name="olio_mozzi_post_f" ' + (row.olio_mozzi_post_f ? 'value="' + row.olio_mozzi_post_f + '"' : '') + '>' +
                                        '<label for="altro_olio_f"></label>' +
                                        '<input type="text" class="form-control" id="altro_olio_f" name="altro_olio_f" ' + (row.altro_olio_f ? 'value="' + row.altro_olio_f + '"' : '') + '>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +  
                    '</div>' +
            '</div>' +          
            '<br>' +      
            //Ricambio
            '<div class="card">' +
            '<div class="card-header"> <div class="row"> <div class="col-4">Codice/Modello </div> <div class="col-4">Fornitore/Marca</div> <div class="col-4">Intervallo</div></div></div>' +
                '<div class="card-body">' +           
                    '<div class="row">' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                                '<label for="cinghia_servizi_cm">Cinghia Servizi:</label>' +
                                '<input type="text" class="form-control" id="cinghia_servizi_cm"  name="cinghia_servizi_cm" ' + (row.cinghia_servizi_cm ? 'value="' + row.cinghia_servizi_cm + '"' : '') + '>' +
                                '<label for="rullo_cinghia_servizi_cm">Rullo Cinghia Servizi:</label>' +
                                '<input type="text" class="form-control" id="rullo_cinghia_servizi_cm"  name="rullo_cinghia_servizi_cm" ' + (row.rullo_cinghia_servizi_cm ? 'value="' + row.rullo_cinghia_servizi_cm + '"' : '') + '>' +
                                '<label for="tenditore_cinghia_servizi_cm">Tenditore Cinghia Servizi:</label>' +
                                '<input type="text" class="form-control" id="tenditore_cinghia_servizi_cm"  name="tenditore_cinghia_servizi_cm" ' + (row.tenditore_cinghia_servizi_cm ? 'value="' + row.tenditore_cinghia_servizi_cm + '"' : '') + '>' +                               
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                                '<label for="cinghia_servizi_fm"></label>' +
                                '<input type="text" class="form-control" id="cinghia_servizi_fm"  name="cinghia_servizi_fm" ' + (row.cinghia_servizi_fm ? 'value="' + row.cinghia_servizi_fm + '"' : '') + '>' +
                                '<label for="rullo_cinghia_servizi_fm"></label>' +
                                '<input type="text" class="form-control" id="rullo_cinghia_servizi_fm"  name="rullo_cinghia_servizi_fm" ' + (row.rullo_cinghia_servizi_fm ? 'value="' + row.rullo_cinghia_servizi_fm + '"' : '') + '>' +
                                '<label for="tenditore_cinghia_servizi_fm"></label>' +
                                '<input type="text" class="form-control" id="tenditore_cinghia_servizi_fm"  name="tenditore_cinghia_servizi_fm" ' + (row.tenditore_cinghia_servizi_fm ? 'value="' + row.tenditore_cinghia_servizi_fm + '"' : '') + '>' +                               
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                                '<label for="cinghia_servizi_i"></label>' +
                                '<input type="text" class="form-control" id="cinghia_servizi_i"  name="cinghia_servizi_i" ' + (row.cinghia_servizi_i ? 'value="' + row.cinghia_servizi_i + '"' : '') + '>' +
                                '<label for="rullo_cinghia_servizi_i"></label>' +
                                '<input type="text" class="form-control" id="rullo_cinghia_servizi_i"  name="rullo_cinghia_servizi_i" ' + (row.rullo_cinghia_servizi_i ? 'value="' + row.rullo_cinghia_servizi_i + '"' : '') + '>' +
                                '<label for="tenditore_cinghia_servizi_i"></label>' +
                                '<input type="text" class="form-control" id="tenditore_cinghia_servizi_i"  name="tenditore_cinghia_servizi_i" ' + (row.tenditore_cinghia_servizi_i ? 'value="' + row.tenditore_cinghia_servizi_i + '"' : '') + '>' +                               
                            '</div>' +
                        '</div>' +
                    '</div>' +               
                '</div>' +
            '</div>' +
            '<br>' +
            '<div class="card">' +
            '<div class="card-header"> <div class="row"> <div class="col-4">Codice/Modello </div> <div class="col-4">Fornitore/Marca</div> <div class="col-4">Intervallo</div></div></div>' +
                '<div class="card-body">' +           
                    '<div class="row">' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                                '<label for="cinghia_ac_aut_cm">Cinghia Ac Aut:</label>' +
                                '<input type="text" class="form-control" id="cinghia_ac_aut_cm"  name="cinghia_ac_aut_cm" ' + (row.cinghia_ac_aut_cm ? 'value="' + row.cinghia_ac_aut_cm + '"' : '') + '>' +
                                '<label for="rullo_cinghia_ac_aut_cm">Rullo Cinghia Ac Aut:</label>' +
                                '<input type="text" class="form-control" id="rullo_cinghia_ac_aut_cm"  name="rullo_cinghia_ac_aut_cm" ' + (row.rullo_cinghia_ac_aut_cm ? 'value="' + row.rullo_cinghia_ac_aut_cm + '"' : '') + '>' +
                                '<label for="tenditore_cinghia_ac_aut_cm">Tenditore Cinghia Ac Aut:</label>' +
                                '<input type="text" class="form-control" id="tenditore_cinghia_ac_aut_cm"  name="tenditore_cinghia_ac_aut_cm" ' + (row.tenditore_cinghia_ac_aut_cm ? 'value="' + row.tenditore_cinghia_ac_aut_cm + '"' : '') + '>' +                               
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                                '<label for="cinghia_servizi_fm"></label>' +
                                '<input type="text" class="form-control" id="cinghia_ac_aut_fm"  name="cinghia_ac_aut_fm" ' + (row.cinghia_ac_aut_fm ? 'value="' + row.cinghia_ac_aut_fm + '"' : '') + '>' +
                                '<label for="rullo_cinghia_ac_aut_fm"></label>' +
                                '<input type="text" class="form-control" id="rullo_cinghia_ac_aut_fm"  name="rullo_cinghia_ac_aut_fm" ' + (row.rullo_cinghia_ac_aut_fm ? 'value="' + row.rullo_cinghia_ac_aut_fm + '"' : '') + '>' +
                                '<label for="tenditore_cinghia_ac_aut_fm"></label>' +
                                '<input type="text" class="form-control" id="tenditore_cinghia_ac_aut_fm"  name="tenditore_cinghia_ac_aut_fm" ' + (row.tenditore_cinghia_ac_aut_fm ? 'value="' + row.tenditore_cinghia_ac_aut_fm + '"' : '') + '>' +                                
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                            '<label for="cinghia_servizi_i"></label>' +
                            '<input type="text" class="form-control" id="cinghia_ac_aut_i"  name="cinghia_ac_aut_i" ' + (row.cinghia_ac_aut_i ? 'value="' + row.cinghia_ac_aut_i + '"' : '') + '>' +
                            '<label for="rullo_cinghia_ac_aut_i"></label>' +
                            '<input type="text" class="form-control" id="rullo_cinghia_ac_aut_i"  name="rullo_cinghia_ac_aut_i" ' + (row.rullo_cinghia_ac_aut_i ? 'value="' + row.rullo_cinghia_ac_aut_i + '"' : '') + '>' +
                            '<label for="tenditore_cinghia_ac_aut_i"></label>' +
                            '<input type="text" class="form-control" id="tenditore_cinghia_ac_aut_i"  name="tenditore_cinghia_ac_aut_i" ' + (row.tenditore_cinghia_ac_aut_i ? 'value="' + row.tenditore_cinghia_ac_aut_i + '"' : '') + '>' +                               
                            '</div>' +
                        '</div>' +
                    '</div>' +               
                '</div>' +
            '</div>' +
            '<br>' +
            //pass
            '<div class="card">' +
            '<div class="card-header"> <div class="row"> <div class="col-4">Codice/Modello </div> <div class="col-4">Fornitore/Marca</div> <div class="col-4">Intervallo</div></div></div>' +
                '<div class="card-body">' +           
                    '<div class="row">' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                                '<label for="cinghia_ac_pass_cm">Cinghia Ac Pass:</label>' +
                                '<input type="text" class="form-control" id="cinghia_ac_pass_cm"  name="cinghia_ac_pass_cm" ' + (row.cinghia_ac_pass_cm ? 'value="' + row.cinghia_ac_pass_cm + '"' : '') + '>' +
                                '<label for="rullo_cinghia_ac_pass_cm">Rullo Cinghia Ac Pass:</label>' +
                                '<input type="text" class="form-control" id="rullo_cinghia_ac_pass_cm"  name="rullo_cinghia_ac_pass_cm" ' + (row.rullo_cinghia_ac_pass_cm ? 'value="' + row.rullo_cinghia_ac_pass_cm + '"' : '') + '>' +
                                '<label for="tenditore_cinghia_ac_pass_cm">Tenditore Cinghia Ac Pass:</label>' +
                                '<input type="text" class="form-control" id="tenditore_cinghia_ac_pass_cm"  name="tenditore_cinghia_ac_pass_cm" ' + (row.tenditore_cinghia_ac_pass_cm ? 'value="' + row.tenditore_cinghia_ac_pass_cm + '"' : '') + '>' +                               
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                            '<label for="cinghia_ac_pass_fm"></label>' +
                            '<input type="text" class="form-control" id="cinghia_ac_pass_fm"  name="cinghia_ac_pass_fm" ' + (row.cinghia_ac_pass_fm ? 'value="' + row.cinghia_ac_pass_fm + '"' : '') + '>' +
                            '<label for="rullo_cinghia_ac_pass_fm"></label>' +
                            '<input type="text" class="form-control" id="rullo_cinghia_ac_pass_fm"  name="rullo_cinghia_ac_pass_fm" ' + (row.rullo_cinghia_ac_pass_fm ? 'value="' + row.rullo_cinghia_ac_pass_fm + '"' : '') + '>' +
                            '<label for="tenditore_cinghia_ac_pass_fm"></label>' +
                            '<input type="text" class="form-control" id="tenditore_cinghia_ac_pass_fm"  name="tenditore_cinghia_ac_pass_fm" ' + (row.tenditore_cinghia_ac_pass_fm ? 'value="' + row.tenditore_cinghia_ac_pass_fm + '"' : '') + '>' +                                 
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                            '<label for="cinghia_ac_pass_i"></label>' +
                            '<input type="text" class="form-control" id="cinghia_ac_pass_i"  name="cinghia_ac_pass_fm" ' + (row.cinghia_ac_pass_i ? 'value="' + row.cinghia_ac_pass_i + '"' : '') + '>' +
                            '<label for="rullo_cinghia_ac_pass_i"></label>' +
                            '<input type="text" class="form-control" id="rullo_cinghia_ac_pass_i"  name="rullo_cinghia_ac_pass_i" ' + (row.rullo_cinghia_ac_pass_i ? 'value="' + row.rullo_cinghia_ac_pass_i + '"' : '') + '>' +
                            '<label for="tenditore_cinghia_ac_pass_i"></label>' +
                            '<input type="text" class="form-control" id="tenditore_cinghia_ac_pass_i"  name="tenditore_cinghia_ac_pass_i" ' + (row.tenditore_cinghia_ac_pass_i ? 'value="' + row.tenditore_cinghia_ac_pass_i + '"' : '') + '>' +                               
                            '</div>' +
                        '</div>' +
                    '</div>' +               
                '</div>' +
            '</div>' +
            '<br>' +
            //altri
            '<div class="card">' +
            '<div class="card-header"> <div class="row"> <div class="col-4">Codice/Modello </div> <div class="col-4">Fornitore/Marca</div> <div class="col-4">Intervallo</div></div></div>' +
                '<div class="card-body">' +           
                    '<div class="row">' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                                '<label for="altre_cinghie_cm">Altre Cinghie:</label>' +
                                '<input type="text" class="form-control" id="altre_cinghie_cm"  name="altre_cinghie_cm" ' + (row.altre_cinghie_cm ? 'value="' + row.altre_cinghie_cm + '"' : '') + '>' +
                                '<label for="altri_rulli_cm">Altri Rulli:</label>' +
                                '<input type="text" class="form-control" id="altri_rulli_cm"  name="altri_rulli_cm" ' + (row.altri_rulli_cm ? 'value="' + row.altri_rulli_cm + '"' : '') + '>' +
                                '<label for="altri_tenditore_cm">Altri Tenditore:</label>' +
                                '<input type="text" class="form-control" id="altri_tenditore_cm"  name="altri_tenditore_cm" ' + (row.altri_tenditore_cm ? 'value="' + row.altri_tenditore_cm + '"' : '') + '>' +                               
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                            '<label for="altre_cinghie_fm"></label>' +
                            '<input type="text" class="form-control" id="altre_cinghie_fm"  name="altre_cinghie_fm" ' + (row.altre_cinghie_fm ? 'value="' + row.altre_cinghie_fm + '"' : '') + '>' +
                            '<label for="altri_rulli_fm"></label>' +
                            '<input type="text" class="form-control" id="altri_rulli_fm"  name="altri_rulli_fm" ' + (row.altri_rulli_fm ? 'value="' + row.altri_rulli_fm + '"' : '') + '>' +
                            '<label for="altri_tenditore_fm"></label>' +
                            '<input type="text" class="form-control" id="altri_tenditore_fm"  name="altri_tenditore_fm" ' + (row.altri_tenditore_fm ? 'value="' + row.altri_tenditore_fm + '"' : '') + '>' +                                 
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                            '<label for="altre_cinghie_i"></label>' +
                            '<input type="text" class="form-control" id="altre_cinghie_i"  name="altre_cinghie_i" ' + (row.altre_cinghie_i ? 'value="' + row.altre_cinghie_i + '"' : '') + '>' +
                            '<label for="altri_rulli_i"></label>' +
                            '<input type="text" class="form-control" id="altri_rulli_i"  name="altri_rulli_i" ' + (row.altri_rulli_i ? 'value="' + row.altri_rulli_i + '"' : '') + '>' +
                            '<label for="altri_tenditore_i"></label>' +
                            '<input type="text" class="form-control" id="altri_tenditore_i"  name="altri_tenditore_i" ' + (row.altri_tenditore_i ? 'value="' + row.altri_tenditore_i + '"' : '') + '>' +                                 
                            '</div>' +
                        '</div>' +
                    '</div>' +               
                '</div>' +
            '</div>' +
            '<br>' +
             //filtro
             '<div class="card">' +
             '<div class="card-header"> <div class="row"> <div class="col-4">Codice </div> <div class="col-4">Fornitore</div> <div class="col-4">Intervallo</div></div></div>' +
                 '<div class="card-body">' +           
                     '<div class="row">' +
                         '<div class="col-4">' +
                             '<div class="form-group">' +
                                 '<label for="filtro_gasolio_c">Filtro Gasolio:</label>' +
                                 '<input type="text" class="form-control" id="filtro_gasolio_c"  name="filtro_gasolio_c" ' + (row.filtro_gasolio_c ? 'value="' + row.filtro_gasolio_c + '"' : '') + '>' +
                                 '<label for="prefiltro_gasolio_c">Prefiltro Gasolio:</label>' +
                                 '<input type="text" class="form-control" id="prefiltro_gasolio_c"  name="prefiltro_gasolio_c" ' + (row.prefiltro_gasolio_c ? 'value="' + row.prefiltro_gasolio_c + '"' : '') + '>' +
                                 '<label for="altro_filtro_gasolio_c">Altro Filtro Gasolio:</label>' +
                                 '<input type="text" class="form-control" id="altro_filtro_gasolio_c"  name="altro_filtro_gasolio_c" ' + (row.altro_filtro_gasolio_c ? 'value="' + row.altro_filtro_gasolio_c + '"' : '') + '>' +                                
                                 '<label for="filtro_area_motore_c">Filtro Area Motore:</label>' +
                                 '<input type="text" class="form-control" id="filtro_area_motore_c"  name="filtro_area_motore_c" ' + (row.filtro_area_motore_c ? 'value="' + row.filtro_area_motore_c + '"' : '') + '>' +
                                 '<label for="filtro_olio_motore_c">Filtro Olio Motore:</label>' +
                                 '<input type="text" class="form-control" id="filtro_olio_motore_c"  name="filtro_olio_motore_c" ' + (row.filtro_olio_motore_c ? 'value="' + row.filtro_olio_motore_c + '"' : '') + '>' +
                                 '<label for="kit_filtro_centrifugo_c">Kit Filtro Centrifugo:</label>' +
                                 '<input type="text" class="form-control" id="kit_filtro_centrifugo_c"  name="kit_filtro_centrifugo_c" ' + (row.kit_filtro_centrifugo_c ? 'value="' + row.kit_filtro_centrifugo_c + '"' : '') + '>' +
                                 '<label for="filtro_essiccatore_c">Filtro Essiccatore:</label>' +
                                 '<input type="text" class="form-control" id="filtro_essiccatore_c"  name="filtro_essiccatore_c" ' + (row.filtro_essiccatore_c ? 'value="' + row.filtro_essiccatore_c + '"' : '') + '>' +
                                 '<label for="filtro_urea_c">Filtro Urea:</label>' +
                                 '<input type="text" class="form-control" id="filtro_urea_c"  name="filtro_urea_c" ' + (row.filtro_urea_c ? 'value="' + row.filtro_urea_c + '"' : '') + '>' +
                                 '<label for="filtro_idroventola_c">Filtro Idroventola:</label>' +
                                 '<input type="text" class="form-control" id="filtro_idroventola_c"  name="filtro_idroventola_c" ' + (row.filtro_idroventola_c ? 'value="' + row.filtro_idroventola_c + '"' : '') + '>' +
                                 '<label for="filtro_olio_cambio_c">Filtro Olio Cambio:</label>' +
                                 '<input type="text" class="form-control" id="filtro_olio_cambio_c"  name="filtro_olio_cambio_c" ' + (row.filtro_olio_cambio_c ? 'value="' + row.filtro_olio_cambio_c + '"' : '') + '>' +
                                 '<label for="filtro_olio_diff_c">Filtro Olio Diff:</label>' +
                                 '<input type="text" class="form-control" id="filtro_olio_diff_c"  name="filtro_olio_diff_c" ' + (row.filtro_olio_diff_c ? 'value="' + row.filtro_olio_diff_c + '"' : '') + '>' +
                                 '<label for="filtro_olio_rellantatore_c">Filtro Olio Rellantatore:</label>' +
                                 '<input type="text" class="form-control" id="filtro_olio_rellantatore_c"  name="filtro_olio_rellantatore_c" ' + (row.filtro_olio_rellantatore_c ? 'value="' + row.filtro_olio_rellantatore_c + '"' : '') + '>' +
                                 '<label for="filtro_aria_ac_autista_c">Filtro Aria Ac Autista:</label>' +
                                 '<input type="text" class="form-control" id="filtro_aria_ac_autista_c"  name="filtro_aria_ac_autista_c" ' + (row.filtro_aria_ac_autista_c ? 'value="' + row.filtro_aria_ac_autista_c + '"' : '') + '>' +
                                 '<label for="filtro_aria_ac_pass_c">Filtro Aria Ac Pass:</label>' +
                                 '<input type="text" class="form-control" id="filtro_aria_ac_pass_c"  name="filtro_aria_ac_pass_c" ' + (row.filtro_aria_ac_pass_c ? 'value="' + row.filtro_aria_ac_pass_c+ '"' : '') + '>' +
                              '</div>' +
                         '</div>' +
                         '<div class="col-4">' +
                             '<div class="form-group">' +
                             '<label for="filtro_gasolio_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_gasolio_f"  name="filtro_gasolio_f" ' + (row.filtro_gasolio_f ? 'value="' + row.filtro_gasolio_f + '"' : '') + '>' +
                                 '<label for="prefiltro_gasolio_f"></label>' +
                                 '<input type="text" class="form-control" id="prefiltro_gasolio_f"  name="prefiltro_gasolio_f" ' + (row.prefiltro_gasolio_f ? 'value="' + row.prefiltro_gasolio_f + '"' : '') + '>' +
                                 '<label for="altro_filtro_gasolio_f"></label>' +
                                 '<input type="text" class="form-control" id="altro_filtro_gasolio_f"  name="altro_filtro_gasolio_f" ' + (row.altro_filtro_gasolio_f ? 'value="' + row.altro_filtro_gasolio_f + '"' : '') + '>' +                                
                                 '<label for="filtro_area_motore_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_area_motore_f"  name="filtro_area_motore_f" ' + (row.filtro_area_motore_f ? 'value="' + row.filtro_area_motore_f + '"' : '') + '>' +
                                 '<label for="filtro_olio_motore_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_olio_motore_f"  name="filtro_olio_motore_f" ' + (row.filtro_olio_motore_f ? 'value="' + row.filtro_olio_motore_f + '"' : '') + '>' +
                                 '<label for="kit_filtro_centrifugo_f"></label>' +
                                 '<input type="text" class="form-control" id="kit_filtro_centrifugo_f"  name="kit_filtro_centrifugo_f" ' + (row.kit_filtro_centrifugo_f ? 'value="' + row.kit_filtro_centrifugo_f + '"' : '') + '>' +
                                 '<label for="filtro_essiccatore_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_essiccatore_f"  name="filtro_essiccatore_f" ' + (row.filtro_essiccatore_f ? 'value="' + row.filtro_essiccatore_f + '"' : '') + '>' +
                                 '<label for="filtro_urea_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_urea_f"  name="filtro_urea_f" ' + (row.filtro_urea_f ? 'value="' + row.filtro_urea_f + '"' : '') + '>' +
                                 '<label for="filtro_idroventola_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_idroventola_f"  name="filtro_idroventola_f" ' + (row.filtro_idroventola_f ? 'value="' + row.filtro_idroventola_f + '"' : '') + '>' +
                                 '<label for="filtro_olio_cambio_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_olio_cambio_f"  name="filtro_olio_cambio_f" ' + (row.filtro_olio_cambio_f ? 'value="' + row.filtro_olio_cambio_f + '"' : '') + '>' +
                                 '<label for="filtro_olio_diff_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_olio_diff_f"  name="filtro_olio_diff_f" ' + (row.filtro_olio_diff_f ? 'value="' + row.filtro_olio_diff_f + '"' : '') + '>' +
                                 '<label for="filtro_olio_rellantatore_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_olio_rellantatore_f"  name="filtro_olio_rellantatore_f" ' + (row.filtro_olio_rellantatore_f ? 'value="' + row.filtro_olio_rellantatore_f + '"' : '') + '>' +
                                 '<label for="filtro_aria_ac_autista_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_aria_ac_autista_f"  name="filtro_aria_ac_autista_f" ' + (row.filtro_aria_ac_autista_f ? 'value="' + row.filtro_aria_ac_autista_f + '"' : '') + '>' +
                                 '<label for="filtro_aria_ac_pass_f"></label>' +
                                 '<input type="text" class="form-control" id="filtro_aria_ac_pass_f"  name="filtro_aria_ac_pass_f" ' + (row.filtro_aria_ac_pass_f ? 'value="' + row.filtro_aria_ac_pass_f + '"' : '') + '>' +                                 
                             '</div>' +
                         '</div>' +
                         '<div class="col-4">' +
                             '<div class="form-group">' +
                             '<label for="filtro_gasolio_i"></label>' +
                             '<input type="text" class="form-control" id="filtro_gasolio_i"  name="filtro_gasolio_i" ' + (row.filtro_gasolio_i ? 'value="' + row.filtro_gasolio_i + '"' : '') + '>' +
                             '<label for="prefiltro_gasolio_i"></label>' +
                             '<input type="text" class="form-control" id="prefiltro_gasolio_i"  name="prefiltro_gasolio_i" ' + (row.prefiltro_gasolio_i ? 'value="' + row.prefiltro_gasolio_i + '"' : '') + '>' +
                             '<label for="altro_filtro_gasolio_i"></label>' +
                             '<input type="text" class="form-control" id="altro_filtro_gasolio_i"  name="altro_filtro_gasolio_i" ' + (row.altro_filtro_gasolio_i ? 'value="' + row.altro_filtro_gasolio_i + '"' : '') + '>' +                                
                             '<label for="filtro_area_motore_i"></label>' +
                             '<input type="text" class="form-control" id="filtro_area_motore_i"  name="filtro_area_motore_i" ' + (row.filtro_area_motore_i ? 'value="' + row.filtro_area_motore_i + '"' : '') + '>' +
                             '<label for="filtro_olio_motore_i"></label>' +
                             '<input type="text" class="form-control" id="filtro_olio_motore_i"  name="filtro_olio_motore_i" ' + (row.filtro_olio_motore_i ? 'value="' + row.filtro_olio_motore_i + '"' : '') + '>' +
                             '<label for="kit_filtro_centrifugo_i"></label>' +
                             '<input type="text" class="form-control" id="kit_filtro_centrifugo_i"  name="kit_filtro_centrifugo_i" ' + (row.kit_filtro_centrifugo_i ? 'value="' + row.kit_filtro_centrifugo_i + '"' : '') + '>' +
                             '<label for="filtro_essiccatore_c"></label>' +
                             '<input type="text" class="form-control" id="filtro_essiccatore_i"  name="filtro_essiccatore_i" ' + (row.filtro_essiccatore_i ? 'value="' + row.filtro_essiccatore_i + '"' : '') + '>' +
                             '<label for="filtro_urea_i"></label>' +
                             '<input type="text" class="form-control" id="filtro_urea_i"  name="filtro_urea_i" ' + (row.filtro_urea_i ? 'value="' + row.filtro_urea_i + '"' : '') + '>' +
                             '<label for="filtro_idroventola_i"></label>' +
                             '<input type="text" class="form-control" id="filtro_idroventola_i"  name="filtro_idroventola_i" ' + (row.filtro_idroventola_i ? 'value="' + row.filtro_idroventola_i + '"' : '') + '>' +
                             '<label for="filtro_olio_cambio_i"></label>' +
                             '<input type="text" class="form-control" id="filtro_olio_cambio_i"  name="filtro_olio_cambio_i" ' + (row.filtro_olio_cambio_i ? 'value="' + row.filtro_olio_cambio_i + '"' : '') + '>' +
                             '<label for="filtro_olio_diff_i"></label>' +
                             '<input type="text" class="form-control" id="filtro_olio_diff_i"  name="filtro_olio_diff_i" ' + (row.filtro_olio_diff_i ? 'value="' + row.filtro_olio_diff_i + '"' : '') + '>' +
                             '<label for="filtro_olio_rellantatore_i"></label>' +
                             '<input type="text" class="form-control" id="filtro_olio_rellantatore_i"  name="filtro_olio_rellantatore_i" ' + (row.filtro_olio_rellantatore_i ? 'value="' + row.filtro_olio_rellantatore_i + '"' : '') + '>' +
                             '<label for="filtro_aria_ac_autista_i"></label>' +
                             '<input type="text" class="form-control" id="filtro_aria_ac_autista_i"  name="filtro_aria_ac_autista_i" ' + (row.filtro_aria_ac_autista_i ? 'value="' + row.filtro_aria_ac_autista_i + '"' : '') + '>' +
                             '<label for="filtro_aria_ac_pass_i"></label>' +
                             '<input type="text" class="form-control" id="filtro_aria_ac_pass_i"  name="filtro_aria_ac_pass_i" ' + (row.filtro_aria_ac_pass_i ? 'value="' + row.filtro_aria_ac_pass_i + '"' : '') + '>' +                                 
                             '</div>' +
                         '</div>' +
                     '</div>' +               
                 '</div>' +
             '</div>' +
             '<br>' +
            //freno
            '<div class="card">' +
            '<div class="card-header"> <div class="row"> <div class="col-4">Codice</div> <div class="col-4">Fornitore</div> <div class="col-4">Note</div></div></div>' +
                '<div class="card-body">' +           
                    '<div class="row">' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                                '<label for="pastiglie_freno_ant_c">Pastiglie Freno Ant:</label>' +
                                '<input type="text" class="form-control" id="pastiglie_freno_ant_c"  name="pastiglie_freno_ant_c" ' + (row.pastiglie_freno_ant_c ? 'value="' + row.pastiglie_freno_ant_c + '"' : '') + '>' +
                                '<label for="pastiglie_freno_post_c">Pastiglie Freno Post:</label>' +
                                '<input type="text" class="form-control" id="pastiglie_freno_post_c"  name="pastiglie_freno_post_c" ' + (row.pastiglie_freno_post_c ? 'value="' + row.pastiglie_freno_post_c + '"' : '') + '>' +                                                              
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                            '<label for="pastiglie_freno_ant_f"></label>' +
                                '<input type="text" class="form-control" id="pastiglie_freno_ant_f"  name="pastiglie_freno_ant_f" ' + (row.pastiglie_freno_ant_f ? 'value="' + row.pastiglie_freno_ant_f + '"' : '') + '>' +
                                '<label for="pastiglie_freno_post_f"></label>' +
                                '<input type="text" class="form-control" id="pastiglie_freno_post_f"  name="pastiglie_freno_post_f" ' + (row.pastiglie_freno_post_f ? 'value="' + row.pastiglie_freno_post_f + '"' : '') + '>' +                                 
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                            '<label for="pastiglie_freno_ant_n"></label>' +
                            '<input type="text" class="form-control" id="pastiglie_freno_ant_n"  name="pastiglie_freno_ant_n" ' + (row.pastiglie_freno_ant_n ? 'value="' + row.pastiglie_freno_ant_n + '"' : '') + '>' +
                            '<label for="pastiglie_freno_post_n"></label>' +
                            '<input type="text" class="form-control" id="pastiglie_freno_post_n"  name="pastiglie_freno_post_n" ' + (row.pastiglie_freno_post_n ? 'value="' + row.pastiglie_freno_post_n + '"' : '') + '>' +                                
                            '</div>' +
                        '</div>' +
                    '</div>' +               
                '</div>' +
            '</div>' +
            '<br>' +
            //bateria
            '<div class="card">' +
            '<div class="card-header"> <div class="row"> <div class="col-4">Codice</div> <div class="col-4">Fornitore</div> <div class="col-4">Note</div></div></div>' +
                '<div class="card-body">' +           
                    '<div class="row">' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                                '<label for="batterie_c">Batterie:</label>' +
                                '<input type="text" class="form-control" id="batterie_c"  name="batterie_c" ' + (row.batterie_c ? 'value="' + row.batterie_c + '"' : '') + '>' +
                                '<label for="modello_spazzole_tergi_c">Modello Spazzole Tergi:</label>' +
                                '<input type="text" class="form-control" id="modello_spazzole_tergi_c"  name="modello_spazzole_tergi_c" ' + (row.modello_spazzole_tergi_c ? 'value="' + row.pastiglie_freno_post_c + '"' : '') + '>' +                                                              
                                '<label for="gomme_ant_c">Gomme Ant:</label>' +
                                '<input type="text" class="form-control" id="gomme_ant_c"  name="gomme_ant_c" ' + (row.gomme_ant_c ? 'value="' + row.gomme_ant_c + '"' : '') + '>' +
                                '<label for="gomme_post_c">Gomme Post:</label>' +
                                '<input type="text" class="form-control" id="gomme_post_c"  name="gomme_post_c" ' + (row.gomme_post_c ? 'value="' + row.gomme_post_c + '"' : '') + '>' + 
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                            '<label for="batterie_f"></label>' +
                                '<input type="text" class="form-control" id="batterie_f"  name="batterie_f" ' + (row.batterie_f ? 'value="' + row.batterie_f + '"' : '') + '>' +
                                '<label for="modello_spazzole_tergi_f"></label>' +
                                '<input type="text" class="form-control" id="modello_spazzole_tergi_f"  name="modello_spazzole_tergi_f" ' + (row.modello_spazzole_tergi_f ? 'value="' + row.pastiglie_freno_post_f + '"' : '') + '>' +                                                              
                                '<label for="gomme_ant_f"></label>' +
                                '<input type="text" class="form-control" id="gomme_ant_f"  name="gomme_ant_f" ' + (row.gomme_ant_f ? 'value="' + row.gomme_ant_f + '"' : '') + '>' +
                                '<label for="gomme_post_f"></label>' +
                                '<input type="text" class="form-control" id="gomme_post_f"  name="gomme_post_f" ' + (row.gomme_post_f ? 'value="' + row.gomme_post_f + '"' : '') + '>' +                                  
                            '</div>' +
                        '</div>' +
                        '<div class="col-4">' +
                            '<div class="form-group">' +
                                '<label for="batterie_n"></label>' +
                                '<input type="text" class="form-control" id="batterie_n"  name="batterie_n" ' + (row.batterie_n ? 'value="' + row.batterie_n + '"' : '') + '>' +
                                '<label for="modello_spazzole_tergi_n"></label>' +
                                '<input type="text" class="form-control" id="modello_spazzole_tergi_n"  name="modello_spazzole_tergi_n" ' + (row.modello_spazzole_tergi_n ? 'value="' + row.modello_spazzole_tergi_n + '"' : '') + '>' +                                                              
                                '<label for="gomme_ant_n"></label>' +
                                '<input type="text" class="form-control" id="gomme_ant_n"  name="gomme_ant_n" ' + (row.gomme_ant_n ? 'value="' + row.gomme_ant_n + '"' : '') + '>' +
                                '<label for="gomme_post_n"></label>' +
                                '<input type="text" class="form-control" id="gomme_post_n"  name="gomme_post_n" ' + (row.gomme_post_n ? 'value="' + row.gomme_post_n + '"' : '') + '>' +                               
                            '</div>' +
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
                title: 'Edit Veicolo',               
                message: form,
                size: 'large',        
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
                            anno: $('#anno').val(),                                                    
                            telaio: $('#telaio').val(),
                            dimensioni: $('#dimensioni').val(),
                            modello_motore: $('#modello_motore').val(),
                            modello_colore: $('#modello_colore').val(),
                            scadenza_garanzia: $('#scadenza_garanzia').val(),
                            obra: $('#obra').val(),
                            posti: $('#posti').val(),
                            nm_motore: $('#nm_motore').val(),
                            //revisione
                            collaudo: $('#collaudo').val(),
                            tachigrafi: $('#tachigrafi').val(),
                            estintori: $('#estintori').val(),
                            casetta_ps: $('#casetta_ps').val(),
                            sistema_ap: $('#sistema_ap').val(), 
                            
                            tipo_olio_cambio_tc: $('#tipo_olio_cambio_tc').val(),
                            tipo_olio_diff_tc: $('#tipo_olio_diff_tc').val(),
                            tipo_olio_rallentatore_tc: $('#tipo_olio_rallentatore_tc').val(),
                            tipo_olio_idroventola_tc: $('#tipo_olio_idroventola_tc').val(),
                            olio_mozzi_ant_tc: $('#olio_mozzi_ant_tc').val(),
                            olio_mozzi_post_tc: $('#olio_mozzi_post_tc').val(),
                            altro_olio_tc: $('#altro_olio_tc').val(),

                            tipo_olio_cambio_qd: $('#tipo_olio_cambio_qd').val(),
                            tipo_olio_diff_qd: $('#tipo_olio_diff_qd').val(),
                            tipo_olio_rallentatore_qd: $('#tipo_olio_rallentatore_qd').val(),
                            tipo_olio_idroventola_qd: $('#tipo_olio_idroventola_qd').val(),
                            olio_mozzi_ant_qd: $('#olio_mozzi_ant_qd').val(),
                            olio_mozzi_post_qd: $('#olio_mozzi_post_qd').val(),
                            altro_olio_qd: $('#altro_olio_qd').val(),

                            tipo_olio_cambio_f: $('#tipo_olio_cambio_f').val(),
                            tipo_olio_diff_f: $('#tipo_olio_diff_f').val(),
                            tipo_olio_rallentatore_f: $('#tipo_olio_rallentatore_f').val(),
                            tipo_olio_idroventola_f: $('#tipo_olio_idroventola_f').val(),
                            olio_mozzi_ant_f: $('#olio_mozzi_ant_f').val(),
                            olio_mozzi_post_f: $('#olio_mozzi_post_f').val(),
                            altro_olio_f: $('#altro_olio_f').val(),

                            cinghia_servizi_cm: $('#cinghia_servizi_cm').val(),
                            rullo_cinghia_servizi_cm: $('#rullo_cinghia_servizi_cm').val(),
                            tenditore_cinghia_servizi_cm: $('#tenditore_cinghia_servizi_cm').val(),

                            cinghia_servizi_fm: $('#cinghia_servizi_fm').val(),
                            rullo_cinghia_servizi_fm: $('#rullo_cinghia_servizi_fm').val(),
                            tenditore_cinghia_servizi_fm: $('#tenditore_cinghia_servizi_fm').val(),

                            cinghia_servizi_i: $('#cinghia_servizi_i').val(),
                            rullo_cinghia_servizi_i: $('#rullo_cinghia_servizi_i').val(),
                            tenditore_cinghia_servizi_i: $('#tenditore_cinghia_servizi_i').val(),

                            cinghia_ac_aut_cm: $('#cinghia_ac_aut_cm').val(),
                            rullo_cinghia_ac_aut_cm: $('#rullo_cinghia_ac_aut_cm').val(),
                            tenditore_cinghia_ac_aut_cm: $('#tenditore_cinghia_ac_aut_cm').val(),

                            cinghia_ac_aut_fm: $('#cinghia_ac_aut_fm').val(),
                            rullo_cinghia_ac_aut_fm: $('#rullo_cinghia_ac_aut_fm').val(),
                            tenditore_cinghia_ac_aut_fm: $('#tenditore_cinghia_ac_aut_fm').val(),

                            cinghia_ac_aut_i: $('#cinghia_ac_aut_i').val(),
                            rullo_cinghia_ac_aut_i: $('#rullo_cinghia_ac_aut_i').val(),
                            tenditore_cinghia_ac_aut_i: $('#tenditore_cinghia_ac_aut_i').val(),

                            cinghia_ac_pass_cm: $('#cinghia_ac_pass_cm').val(),
                            rullo_cinghia_ac_pass_cm: $('#rullo_cinghia_ac_pass_cm').val(),
                            tenditore_cinghia_ac_pass_cm: $('#tenditore_cinghia_ac_pass_cm').val(),

                            cinghia_ac_pass_fm: $('#cinghia_ac_pass_fm').val(),
                            rullo_cinghia_ac_pass_fm: $('#rullo_cinghia_ac_pass_fm').val(),
                            tenditore_cinghia_ac_pass_fm: $('#tenditore_cinghia_ac_pass_fm').val(),

                            cinghia_ac_pass_i: $('#cinghia_ac_pass_i').val(),
                            rullo_cinghia_ac_pass_i: $('#rullo_cinghia_ac_pass_i').val(),
                            tenditore_cinghia_ac_pass_i: $('#tenditore_cinghia_ac_pass_i').val(),
                            //altri
                            altre_cinghie_cm: $('#altre_cinghie_cm').val(),
                            altri_rulli_cm: $('#altri_rulli_cm').val(),
                            altri_tenditore_cm: $('#altri_tenditore_cm').val(),

                            altre_cinghie_fm: $('#altre_cinghie_fm').val(),
                            altri_rulli_fm: $('#altri_rulli_fm').val(),
                            altri_tenditore_fm: $('#altri_tenditore_fm').val(),

                            altre_cinghie_i: $('#altre_cinghie_i').val(),
                            altri_rulli_i: $('#altri_rulli_i').val(),
                            altri_tenditore_i: $('#altri_tenditore_i').val(),

                            // Variables para el grupo "c"
                            filtro_gasolio_c: $('#filtro_gasolio_c').val(),
                            prefiltro_gasolio_c: $('#prefiltro_gasolio_c').val(),
                            altro_filtro_gasolio_c: $('#altro_filtro_gasolio_c').val(),
                            filtro_area_motore_c: $('#filtro_area_motore_c').val(),
                            filtro_olio_motore_c: $('#filtro_olio_motore_c').val(),
                            kit_filtro_centrifugo_c: $('#kit_filtro_centrifugo_c').val(),
                            filtro_essiccatore_c: $('#filtro_essiccatore_c').val(),
                            filtro_urea_c: $('#filtro_urea_c').val(),
                            filtro_idroventola_c: $('#filtro_idroventola_c').val(),
                            filtro_olio_cambio_c: $('#filtro_olio_cambio_c').val(),
                            filtro_olio_diff_c: $('#filtro_olio_diff_c').val(),
                            filtro_olio_rellantatore_c: $('#filtro_olio_rellantatore_c').val(),
                            filtro_aria_ac_autista_c: $('#filtro_aria_ac_autista_c').val(),
                            filtro_aria_ac_pass_c: $('#filtro_aria_ac_pass_c').val(),

                            // Variables para el grupo "f"
                            filtro_gasolio_f: $('#filtro_gasolio_f').val(),
                            prefiltro_gasolio_f: $('#prefiltro_gasolio_f').val(),
                            altro_filtro_gasolio_f: $('#altro_filtro_gasolio_f').val(),
                            filtro_area_motore_f: $('#filtro_area_motore_f').val(),
                            filtro_olio_motore_f: $('#filtro_olio_motore_f').val(),
                            kit_filtro_centrifugo_f: $('#kit_filtro_centrifugo_f').val(),
                            filtro_essiccatore_f: $('#filtro_essiccatore_f').val(),
                            filtro_urea_f: $('#filtro_urea_f').val(),
                            filtro_idroventola_f: $('#filtro_idroventola_f').val(),
                            filtro_olio_cambio_f: $('#filtro_olio_cambio_f').val(),
                            filtro_olio_diff_f: $('#filtro_olio_diff_f').val(),
                            filtro_olio_rellantatore_f: $('#filtro_olio_rellantatore_f').val(),
                            filtro_aria_ac_autista_f: $('#filtro_aria_ac_autista_f').val(),
                            filtro_aria_ac_pass_f: $('#filtro_aria_ac_pass_f').val(),

                            // Variables para el grupo "i"
                            filtro_gasolio_i: $('#filtro_gasolio_i').val(),
                            prefiltro_gasolio_i: $('#prefiltro_gasolio_i').val(),
                            altro_filtro_gasolio_i: $('#altro_filtro_gasolio_i').val(),
                            filtro_area_motore_i: $('#filtro_area_motore_i').val(),
                            filtro_olio_motore_i: $('#filtro_olio_motore_i').val(),
                            kit_filtro_centrifugo_i: $('#kit_filtro_centrifugo_i').val(),
                            filtro_essiccatore_i: $('#filtro_essiccatore_i').val(),
                            filtro_urea_i: $('#filtro_urea_i').val(),
                            filtro_idroventola_i: $('#filtro_idroventola_i').val(),
                            filtro_olio_cambio_i: $('#filtro_olio_cambio_i').val(),
                            filtro_olio_diff_i: $('#filtro_olio_diff_i').val(),
                            filtro_olio_rellantatore_i: $('#filtro_olio_rellantatore_i').val(),
                            filtro_aria_ac_autista_i: $('#filtro_aria_ac_autista_i').val(),
                            filtro_aria_ac_pass_i: $('#filtro_aria_ac_pass_i').val(),
                            //freno
                            pastiglie_freno_ant_c: $('#pastiglie_freno_ant_c').val(),
                            pastiglie_freno_post_c: $('#pastiglie_freno_post_c').val(),
                            pastiglie_freno_ant_f: $('#pastiglie_freno_ant_f').val(),
                            pastiglie_freno_post_f: $('#pastiglie_freno_post_f').val(),
                            pastiglie_freno_ant_n: $('#pastiglie_freno_ant_n').val(),
                            pastiglie_freno_post_n: $('#pastiglie_freno_post_n').val(),
                            //batteria
                            batterie_c: $('#batterie_c').val(),
                            modello_spazzole_tergi_c: $('#modello_spazzole_tergi_c').val(),
                            gomme_ant_c: $('#gomme_ant_c').val(),
                            gomme_post_c: $('#gomme_post_c').val(),
                            batterie_f: $('#batterie_f').val(),
                            modello_spazzole_tergi_f: $('#modello_spazzole_tergi_f').val(),
                            gomme_ant_f: $('#gomme_ant_f').val(),
                            gomme_post_f: $('#gomme_post_f').val(),
                            batterie_n: $('#batterie_n').val(),
                            modello_spazzole_tergi_n: $('#modello_spazzole_tergi_n').val(),
                            gomme_ant_n: $('#gomme_ant_n').val(),
                            gomme_post_n: $('#gomme_post_n').val(),

                            
                        };
                        
                        request.open("POST", "/VeicoliInfo/aggiorna/");
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

function view(targa, data) {  
    //console.log(data)
            var logo = '<img src="https://lenington.co/logo_lavagna.jpg" class="img-thumbnail" alt="logo">'; 
    var table = '<div class="container">'+
            '<div class="container" style="text-align: center;">'+
                '<h4>Targa: '+targa+'</h4>'+
            '</div>'+ 
            '<div class="card">'+
                '<div class="card-body">'+                      
                    '<table class="table table-bordered">'+              
                    '<tbody>'+
                        '<tr>'+
                        '<th>Telaio</th>'+
                        '<td>'+(data.telaio !== null ? data.telaio :'')+'</td>'+
                        '<th>Modello Colore</td>'+
                        '<td>'+(data.modello_colore !== null ? data.modello_colore: '')+'</td>'+                   
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Anno</th>'+
                        '<td>'+(data.anno !== null ? data.anno :'')+'</td>'+
                        '<th>Scadenza Garanzia</td>'+
                        '<td>'+(data.scadenza_garanzia !== null ? data.scadenza_garanzia : '')+'</td>'+                   
                        '</tr>'+   
                        '<tr>'+
                        '<th>Dimensioni</th>'+
                        '<td>'+(data.dimensioni !== null ? data.dimensioni: '')+'</td>'+
                        '<th>Obra</td>'+
                        '<td>'+(data.obra !== null ? data.obra: '')+'</td>'+                   
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Modello Motore</th>'+
                        '<td>'+(data.modello_motore !== null ? data.modello_motore: '')+'</td>'+
                        '<th>Posti</td>'+
                        '<td>'+(data.posti !== null ? data.posti: '')+'</td>'+                   
                        '</tr>'+  
                        '<tr>'+
                        '<th></th>'+
                        '<td></td>'+
                        '<th>Nm Motore</td>'+
                        '<td>'+(data.nm_motore !== null ? data.nm_motore: '')+'</td>'+                   
                        '</tr>'+                                          
                    '</tbody>'+
                    '</table>'+
                '</div>'+
            '</div>'+
            '<br>'+
            //revisione
             '<div class="card">'+
                '<div class="card-body">'+                      
                    '<table class="table table-bordered">'+  
                    '<thead class="table-secondary">'+
                    '<tr>'+
                        '<th>CONTROLLO REVISIONI PERIODICHE</th>'+  
                        '<th>ULTIMI DATI</th>'+                     
                    '</tr>'+
                    '</thead>'+                
                    '<tbody>'+
                        '<tr>'+
                        '<th>Collaudo</th>'+
                        '<td>'+data.collaudo+'</td>'+                                          
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Tachigrafi</th>'+
                        '<td>'+data.tachigrafi+'</td>'+                                          
                        '</tr>'+   
                        '<tr>'+
                        '<th>Estintori</th>'+
                        '<td>'+data.estintori+'</td>'+                                          
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Casetta Pronto Soccorso</th>'+
                        '<td>'+data.casetta_ps+'</td>'+                                                                  
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Sistema Antincendio Pullman</th>'+
                        '<td>'+data.sistema_ap+'</td>'+                                                                  
                        '</tr>'+                                        
                    '</tbody>'+
                    '</table>'+
                '</div>'+
            '</div>'+
            '<br>'+ 
            //revisione
            '<div class="card">'+
                '<div class="card-body">'+                      
                    '<table class="table table-bordered">'+ 
                    '<thead class="table-secondary">'+
                    '<tr>'+
                        '<th>TIPO OLIO MOTORE</th>'+
                        '<th>TIPO/CODICE</th>'+
                        '<th>QUANTITA/DURATA</th>'+
                        '<th>FORNITORE</th>'+
                    '</tr>'+
                    '</thead>'+             
                    '<tbody>'+
                        '<tr>'+
                        '<th>Tipo Olio Cambio</th>'+
                        '<td>'+(data.tipo_olio_cambio_tc !== null ? data.tipo_olio_cambio_tc: '')+'</td>'+                        
                        '<td>'+(data.tipo_olio_cambio_qd !== null ? data.tipo_olio_cambio_qd: '')+'</td>'+
                        '<td>'+(data.tipo_olio_cambio_f !== null ? data.tipo_olio_cambio_f: '')+'</td>'+                                          
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Tipo Olio Diff</th>'+
                        '<td>'+(data.tipo_olio_diff_tc !== null ? data.tipo_olio_diff_tc: '')+'</td>'+                        
                        '<td>'+(data.tipo_olio_diff_qd !== null ? data.tipo_olio_diff_qd: '')+'</td>'+
                        '<td>'+(data.tipo_olio_diff_f !== null ? data.tipo_olio_diff_f: '')+'</td>'+                                         
                        '</tr>'+   
                        '<tr>'+
                        '<th>Tipo Olio Rellantatore</th>'+
                        '<td>'+(data.tipo_olio_rallentatore_tc !== null ? data.tipo_olio_rallentatore_tc: '')+'</td>'+                        
                        '<td>'+(data.tipo_olio_rallentatore_qd !== null ? data.tipo_olio_rallentatore_qd: '')+'</td>'+
                        '<td>'+(data.tipo_olio_rallentatore_f !== null ? data.tipo_olio_rallentatore_f: '')+'</td>'+                                         
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Tipo Olio Idroventola</th>'+
                        '<td>'+(data.tipo_olio_idroventola_tc !== null ? data.tipo_olio_idroventola_tc: '')+'</td>'+                        
                        '<td>'+(data.tipo_olio_idroventola_qd !== null ? data.tipo_olio_idroventola_qd: '')+'</td>'+
                        '<td>'+(data.tipo_olio_idroventola_f !== null ? data.tipo_olio_idroventola_f: '')+'</td>'+                                                                  
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Olio Mozzi Ant</th>'+
                        '<td>'+(data.olio_mozzi_ant_tc !== null ? data.olio_mozzi_ant_tc: '')+'</td>'+                        
                        '<td>'+(data.olio_mozzi_ant_qd !== null ? data.olio_mozzi_ant_qd: '')+'</td>'+
                        '<td>'+(data.olio_mozzi_ant_f !== null ? data.olio_mozzi_ant_f: '')+'</td>'+                                                                  
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Olio Mozzi Post</th>'+
                        '<td>'+(data.olio_mozzi_post_tc !== null ? data.olio_mozzi_post_tc: '')+'</td>'+                        
                        '<td>'+(data.olio_mozzi_post_qd !== null ? data.olio_mozzi_post_qd: '')+'</td>'+
                        '<td>'+(data.olio_mozzi_post_f !== null ? data.olio_mozzi_post_f: '')+'</td>'+                                                                  
                        '</tr>'+
                        '<tr>'+
                        '<th>Altro Olio</th>'+
                        '<td>'+(data.altro_olio_tc !== null ? data.altro_olio_tc: '')+'</td>'+                        
                        '<td>'+(data.altro_olio_qd !== null ? data.altro_olio_qd: '')+'</td>'+
                        '<td>'+(data.altro_olio_f !== null ? data.altro_olio_f: '')+'</td>'+                                                                  
                        '</tr>'+                                                                         
                    '</tbody>'+
                    '</table>'+
                '</div>'+
            '</div>'+
            '<br>'+
            '<div class="card">'+
                '<div class="card-body">'+                      
                    '<table class="table table-bordered">'+ 
                    '<thead class="table-secondary">'+
                    '<tr>'+
                        '<th>RICAMBIO</th>'+
                        '<th>CODICE/MODELLO</th>'+
                        '<th>FORNITORE/MARCA</th>'+
                        '<th>INTERVALLO</th>'+
                    '</tr>'+
                    '</thead>'+             
                    '<tbody>'+
                        '<tr>'+
                        '<th>Cinghia Servizi</th>'+
                        '<td>'+(data.cinghia_servizi_cm !== null ? data.cinghia_servizi_cm: '')+'</td>'+                        
                        '<td>'+(data.cinghia_servizi_fm !== null ? data.cinghia_servizi_fm: '')+'</td>'+
                        '<td>'+(data.cinghia_servizi_i !== null ? data.cinghia_servizi_i: '')+'</td>'+                                          
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Rullo Cinghia Servizi</th>'+
                        '<td>'+(data.rullo_cinghia_servizi_cm !== null ? data.rullo_cinghia_servizi_cm: '')+'</td>'+                        
                        '<td>'+(data.rullo_cinghia_servizi_fm !== null ? data.rullo_cinghia_servizi_fm: '')+'</td>'+
                        '<td>'+(data.rullo_cinghia_servizi_i !== null ? data.rullo_cinghia_servizi_i: '')+'</td>'+                                         
                        '</tr>'+   
                        '<tr>'+
                        '<th>Tenditore Cinghia Servizi</th>'+
                        '<td>'+(data.tenditore_cinghia_servizi_cm !== null ? data.tenditore_cinghia_servizi_cm: '')+'</td>'+                        
                        '<td>'+(data.tenditore_cinghia_servizi_fm !== null ? data.tenditore_cinghia_servizi_fm: '')+'</td>'+
                        '<td>'+(data.tenditore_cinghia_servizi_i !== null ? data.tenditore_cinghia_servizi_i: '')+'</td>'+                                         
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Cinghia Ac Aut</th>'+
                        '<td>'+(data.cinghia_ac_aut_cm !== null ? data.cinghia_ac_aut_cm: '')+'</td>'+                        
                        '<td>'+(data.cinghia_ac_aut_fm !== null ? data.cinghia_ac_aut_fm: '')+'</td>'+
                        '<td>'+(data.cinghia_ac_aut_i !== null ? data.cinghia_ac_aut_i: '')+'</td>'+                                                                  
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Rullo Cinghia Ac Aut</th>'+
                        '<td>'+(data.rullo_cinghia_ac_aut_cm !== null ? data.rullo_cinghia_ac_aut_cm: '')+'</td>'+                        
                        '<td>'+(data.rullo_cinghia_ac_aut_fm !== null ? data.rullo_cinghia_ac_aut_fm: '')+'</td>'+
                        '<td>'+(data.rullo_cinghia_ac_aut_i !== null ? data.rullo_cinghia_ac_aut_i: '')+'</td>'+                                                                  
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Tenditore Cinghia Ac Aut</th>'+
                        '<td>'+(data.tenditore_cinghia_ac_aut_cm !== null ? data.tenditore_cinghia_ac_aut_cm: '')+'</td>'+                        
                        '<td>'+(data.tenditore_cinghia_ac_aut_fm !== null ? data.tenditore_cinghia_ac_aut_fm: '')+'</td>'+
                        '<td>'+(data.tenditore_cinghia_ac_aut_i !== null ? data.tenditore_cinghia_ac_aut_i: '')+'</td>'+                                                                  
                        '</tr>'+
                        '<tr>'+
                        '<th>Cinghia Ac Pass</th>'+
                        '<td>'+(data.cinghia_ac_pass_cm !== null ? data.cinghia_ac_pass_cm: '')+'</td>'+                        
                        '<td>'+(data.cinghia_ac_pass_fm !== null ? data.cinghia_ac_pass_fm: '')+'</td>'+
                        '<td>'+(data.cinghia_ac_pass_i !== null ? data.cinghia_ac_pass_i: '')+'</td>'+                                                                  
                        '</tr>'+
                        '<tr>'+
                        '<th>Rullo Cinghia Ac Pass</th>'+
                        '<td>'+(data.rullo_cinghia_ac_pass_cm !== null ? data.rullo_cinghia_ac_pass_cm: '')+'</td>'+                        
                        '<td>'+(data.rullo_cinghia_ac_pass_fm !== null ? data.rullo_cinghia_ac_pass_fm: '')+'</td>'+
                        '<td>'+(data.rullo_cinghia_ac_pass_i !== null ? data.rullo_cinghia_ac_pass_i: '')+'</td>'+                                                                  
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Tenditore Cinghia Ac Pass</th>'+
                        '<td>'+(data.tenditore_cinghia_ac_pass_cm !== null ? data.tenditore_cinghia_ac_pass_cm: '')+'</td>'+                        
                        '<td>'+(data.tenditore_cinghia_ac_pass_fm !== null ? data.tenditore_cinghia_ac_pass_fm: '')+'</td>'+
                        '<td>'+(data.tenditore_cinghia_ac_pass_i !== null ? data.tenditore_cinghia_ac_pass_i: '')+'</td>'+                                                                  
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Altre Cinghie</th>'+
                        '<td>'+(data.altre_cinghie_cm !== null ? data.altre_cinghie_cm: '')+'</td>'+                        
                        '<td>'+(data.altre_cinghie_fm !== null ? data.altre_cinghie_fm: '')+'</td>'+
                        '<td>'+(data.altre_cinghie_i !== null ? data.altre_cinghie_i: '')+'</td>'+                                                                  
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Altri Rulli</th>'+
                        '<td>'+(data.altri_rulli_cm !== null ? data.altri_rulli_cm: '')+'</td>'+                        
                        '<td>'+(data.altri_rulli_fm !== null ? data.altri_rulli_fm: '')+'</td>'+
                        '<td>'+(data.altri_rulli_i !== null ? data.altri_rulli_i: '')+'</td>'+                                                                  
                        '</tr>'+ 
                        '<tr>'+
                        '<th>Altri Tenditore</th>'+
                        '<td>'+(data.altri_tenditore_cm !== null ? data.altri_tenditore_cm: '')+'</td>'+                        
                        '<td>'+(data.altri_tenditore_fm !== null ? data.altri_tenditore_fm: '')+'</td>'+
                        '<td>'+(data.altri_tenditore_i !== null ? data.altri_tenditore_i: '')+'</td>'+                                                                  
                        '</tr>'+                                                                                              
                    '</tbody>'+
                    '</table>'+
                '</div>'+
            '</div>'+
            '<br>'+
            '<div class="card">'+
            '<div class="card-body">'+                      
                '<table class="table table-bordered">'+ 
                '<thead class="table-secondary">'+
                '<tr>'+
                    '<th>RICAMBIO</th>'+
                    '<th>CODICE/MODELLO</th>'+
                    '<th>FORNITORE/MARCA</th>'+
                    '<th>INTERVALLO</th>'+
                '</tr>'+
                '</thead>'+             
                '<tbody>'+
                    '<tr>'+
                    '<th>Filtro Gasolio</th>'+
                    '<td>'+(data.filtro_gasolio_c !== null ? data.filtro_gasolio_c: '')+'</td>'+                        
                    '<td>'+(data.filtro_gasolio_f !== null ? data.filtro_gasolio_f: '')+'</td>'+
                    '<td>'+(data.filtro_gasolio_i !== null ? data.filtro_gasolio_i: '')+'</td>'+                                          
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Prefiltro Gasolio</th>'+
                    '<td>'+(data.prefiltro_gasolio_c !== null ? data.prefiltro_gasolio_c: '')+'</td>'+                        
                    '<td>'+(data.prefiltro_gasolio_f !== null ? data.prefiltro_gasolio_f: '')+'</td>'+
                    '<td>'+(data.prefiltro_gasolio_i !== null ? data.prefiltro_gasolio_i: '')+'</td>'+                                         
                    '</tr>'+   
                    '<tr>'+
                    '<th>Altro Filtro Gasolio</th>'+
                    '<td>'+(data.altro_filtro_gasolio_c !== null ? data.altro_filtro_gasolio_c: '')+'</td>'+                        
                    '<td>'+(data.altro_filtro_gasolio_f !== null ? data.altro_filtro_gasolio_f: '')+'</td>'+
                    '<td>'+(data.altro_filtro_gasolio_i !== null ? data.altro_filtro_gasolio_i: '')+'</td>'+                                         
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Filtro Aria Motore</th>'+
                    '<td>'+(data.filtro_area_motore_c !== null ? data.filtro_area_motore_c: '')+'</td>'+                        
                    '<td>'+(data.filtro_area_motore_f !== null ? data.filtro_area_motore_f: '')+'</td>'+
                    '<td>'+(data.filtro_area_motore_i !== null ? data.filtro_area_motore_i: '')+'</td>'+                                                                  
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Filtro Olio Motore</th>'+
                    '<td>'+(data.filtro_olio_motore_c !== null ? data.filtro_olio_motore_c: '')+'</td>'+                        
                    '<td>'+(data.filtro_olio_motore_f !== null ? data.filtro_olio_motore_f: '')+'</td>'+
                    '<td>'+(data.filtro_olio_motore_i !== null ? data.filtro_olio_motore_i: '')+'</td>'+                                                                  
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Kit Filtro Centrifugo</th>'+
                    '<td>'+(data.kit_filtro_centrifugo_c !== null ? data.kit_filtro_centrifugo_c: '')+'</td>'+                        
                    '<td>'+(data.kit_filtro_centrifugo_f !== null ? data.kit_filtro_centrifugo_f: '')+'</td>'+
                    '<td>'+(data.kit_filtro_centrifugo_i !== null ? data.kit_filtro_centrifugo_i: '')+'</td>'+                                                                  
                    '</tr>'+
                    '<tr>'+
                    '<th>Filtro Essiccatore</th>'+
                    '<td>'+(data.filtro_essiccatore_c !== null ? data.filtro_essiccatore_c: '')+'</td>'+                        
                    '<td>'+(data.filtro_essiccatore_f !== null ? data.filtro_essiccatore_f: '')+'</td>'+
                    '<td>'+(data.filtro_essiccatore_i !== null ? data.filtro_essiccatore_i: '')+'</td>'+                                                                  
                    '</tr>'+
                    '<tr>'+
                    '<th>Filtro Urea</th>'+
                    '<td>'+(data.filtro_urea_c !== null ? data.filtro_urea_c: '')+'</td>'+                        
                    '<td>'+(data.filtro_urea_f !== null ? data.filtro_urea_f: '')+'</td>'+
                    '<td>'+(data.filtro_urea_i !== null ? data.filtro_urea_i: '')+'</td>'+                                                                  
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Filtro Idroventola</th>'+
                    '<td>'+(data.filtro_idroventola_c !== null ? data.filtro_idroventola_c: '')+'</td>'+                        
                    '<td>'+(data.filtro_idroventola_f !== null ? data.filtro_idroventola_f: '')+'</td>'+
                    '<td>'+(data.filtro_idroventola_i !== null ? data.filtro_idroventola_i: '')+'</td>'+                                                                  
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Filtro Olio Cambio</th>'+
                    '<td>'+(data.filtro_olio_cambio_c !== null ? data.filtro_olio_cambio_c:'')+'</td>'+                        
                    '<td>'+(data.filtro_olio_cambio_f !== null ? data.filtro_olio_cambio_f:'')+'</td>'+
                    '<td>'+(data.filtro_olio_cambio_i !== null ? data.filtro_olio_cambio_i:'')+'</td>'+                                                                  
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Filtro Olio Diff</th>'+
                    '<td>'+(data.filtro_olio_diff_c !== null ? data.filtro_olio_diff_c:'')+'</td>'+                        
                    '<td>'+(data.filtro_olio_diff_f !== null ? data.filtro_olio_diff_f:'')+'</td>'+
                    '<td>'+(data.filtro_olio_diff_i !== null ? data.filtro_olio_diff_i:'')+'</td>'+                                                                  
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Filtro Olio Rellantatore</th>'+
                    '<td>'+(data.filtro_olio_rellantatore_c !== null ? data.filtro_olio_rellantatore_c:'')+'</td>'+                        
                    '<td>'+(data.filtro_olio_rellantatore_f !== null ? data.filtro_olio_rellantatore_f:'')+'</td>'+
                    '<td>'+(data.filtro_olio_rellantatore_i !== null ? data.filtro_olio_rellantatore_i:'')+'</td>'+                                                                  
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Filtro Aria Ac Autista</th>'+
                    '<td>'+(data.filtro_aria_ac_autista_c !== null ? data.filtro_aria_ac_autista_c:'')+'</td>'+                        
                    '<td>'+(data.filtro_aria_ac_autista_f !== null ? data.filtro_aria_ac_autista_f:'')+'</td>'+
                    '<td>'+(data.filtro_aria_ac_autista_i !== null ? data.filtro_aria_ac_autista_i:'')+'</td>'+                                                                  
                    '</tr>'+
                    '<tr>'+
                    '<th>Filtro Aria Ac Pass</th>'+
                    '<td>'+(data.filtro_aria_ac_pass_c !== null ? data.filtro_aria_ac_pass_c:'')+'</td>'+                        
                    '<td>'+(data.filtro_aria_ac_pass_f !== null ? data.filtro_aria_ac_pass_f:'')+'</td>'+
                    '<td>'+(data.filtro_aria_ac_pass_i !== null ? data.filtro_aria_ac_pass_i:'')+'</td>'+                                                                  
                    '</tr>'+                                                                                                            
                '</tbody>'+
                '</table>'+
            '</div>'+
        '</div>'+
        '<br>'+
        '<div class="card">'+
            '<div class="card-body">'+                      
                '<table class="table table-bordered">'+ 
                '<thead class="table-secondary">'+
                '<tr>'+
                    '<th>RICAMBIO</th>'+
                    '<th>CODICE/MODELLO</th>'+
                    '<th>FORNITORE/MARCA</th>'+
                    '<th>NOTE</th>'+
                '</tr>'+
                '</thead>'+             
                '<tbody>'+
                    '<tr>'+
                    '<th>Pastiglie Freno Ant</th>'+
                    '<td>'+(data.pastiglie_freno_ant_c !== null ? data.pastiglie_freno_ant_c:'')+'</td>'+                        
                    '<td>'+(data.pastiglie_freno_ant_f !== null ? data.pastiglie_freno_ant_f:'')+'</td>'+
                    '<td>'+(data.pastiglie_freno_ant_n !== null ? data.pastiglie_freno_ant_n:'')+'</td>'+                                          
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Pastiglie Freno post</th>'+
                    '<td>'+(data.pastiglie_freno_post_c !== null ? data.pastiglie_freno_post_c:'')+'</td>'+                        
                    '<td>'+(data.pastiglie_freno_post_f !== null ? data.pastiglie_freno_post_f:'')+'</td>'+
                    '<td>'+(data.pastiglie_freno_post_n !== null ? data.pastiglie_freno_post_n:'')+'</td>'+                                         
                    '</tr>'+   
                    '<tr>'+
                    '<th>Batterie</th>'+
                    '<td>'+(data.batterie_c !== null ? data.batterie_c:'')+'</td>'+                        
                    '<td>'+(data.batterie_f !== null ? data.batterie_f:'')+'</td>'+
                    '<td>'+(data.batterie_n !== null ? data.batterie_n:'')+'</td>'+                                         
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Modello Spazzole Tergi</th>'+
                    '<td>'+(data.modello_spazzole_tergi_c !== null ? data.modello_spazzole_tergi_c:'')+'</td>'+                        
                    '<td>'+(data.modello_spazzole_tergi_f !== null ? data.modello_spazzole_tergi_f:'')+'</td>'+
                    '<td>'+(data.modello_spazzole_tergi_n !== null ? data.modello_spazzole_tergi_n:'')+'</td>'+                                                                  
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Gomme Ant</th>'+
                    '<td>'+(data.gomme_ant_c !== null ? data.gomme_ant_c:'')+'</td>'+                        
                    '<td>'+(data.gomme_ant_f !== null ? data.gomme_ant_f:'')+'</td>'+
                    '<td>'+(data.gomme_ant_n !== null ? data.gomme_ant_n:'')+'</td>'+                                                                  
                    '</tr>'+ 
                    '<tr>'+
                    '<th>Gomme Post</th>'+
                    '<td>'+(data.gomme_post_c !== null ? data.gomme_post_c:'')+'</td>'+                        
                    '<td>'+(data.gomme_post_f !== null ? data.gomme_post_f:'')+'</td>'+
                    '<td>'+(data.gomme_post_n !== null ? data.gomme_post_n:'')+'</td>'+                                                                  
                    '</tr>'+                                                                                                          
                '</tbody>'+
                '</table>'+
            '</div>'+
        '</div>'+
        '<br>'+
        '</div>'      
          ;
          bootbox.confirm({
            title: logo,
            message: table,
            size: 'large',
            buttons: {
                cancel: {
                    label: 'Cancella',
                    className: 'btn-secondary'
                },
                confirm: {
                    label: 'Download',
                    className: 'btn-danger'
                },
            },
            callback: function (result) {
                if (result) {
                    // Redirige al enlace de descarga
                    window.location.href = '/VeicoliInfo/stampa_veicolo_info/1/' + targa;
                }
            }
        });
        
                
        }

       
        
        function stampa(targa, data) {   
           console.log(data)
                        var request = new XMLHttpRequest();
                                       
                        // Configura los encabezados para permitir solicitudes desde cualquier origen (*)
                        request.open("GET", "stampa/" + targa+ "/"+ data);
                        request.setRequestHeader('Content-Type', 'application/json');
                        request.setRequestHeader('Access-Control-Allow-Origin', '*');
                
                        // Manejador de éxito
                        request.onload = function () {
                            if (request.status === 200) {                                
                                console.log(request.responseText);                                
                               
                            } else {
                                // Hubo un error en la solicitud
                                console.error('Error en la solicitud: ' + request.status);
                            }
                        };
                
                        // Manejador de error de red
                        request.onerror = function () {
                            console.error('Error de red');
                        };
                
                        // Envía la solicitud
                        request.send();
                    }
                
                
                   
        
        