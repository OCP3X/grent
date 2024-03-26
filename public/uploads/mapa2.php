<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<style>
    #map{
    width: 100%;
    height: 100vh;
}

.custom-btn {
    padding: 0.25rem 0.255rem; 
}

.loader-page2 {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('https://mimeteorologico.com/cubo.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
    
</style>

<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    
    <div class="loader-page"></div>
 
 <div id="map"></div>
    
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKyzORhetXQp6Q9cFWeV8rbgDqn4tcv3c&callback=initMap&v=weekly" defer></script>


<script>
// Declarar infoWindows como una variable global
const infoWindows = [];

function isNumeric(value) {
  return !isNaN(parseFloat(value)) && isFinite(value);
}


function initMap() {
    axios.get('https://gecelca.mimeteorologico.com/mapa_estacion')
        .then(response => {
            const datos = response.data;
            const estacion = datos[0];
            const sensores = datos[1];
            
            
            var puntos = estacion;

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 6,
                center: { lat: parseFloat(puntos[0].lat), lng: parseFloat(puntos[0].lng) },
            });

            puntos.forEach(punto => {
                const lat = parseFloat(punto.lat);
                const lng = parseFloat(punto.lng);

                if (!isNaN(lat) && !isNaN(lng)) {
                    const marker = new google.maps.Marker({
                        position: { lat: lat, lng: lng },
                        map: map,
                        title: `Click para ver la estación ${punto.nombre_estacion}!`,
                        label: {
                            text: `Estación ${punto.nombre_estacion}`,
                            color: 'black', // Color del texto de la etiqueta
                            fontSize: '14px', // Tamaño del texto de la etiqueta
                            fontWeight: 'bold', // Peso de la fuente
                            // Opcional: sombra del texto
                            shadow: {
                                color: 'rgba(238, 238, 238, 0.5)',
                                fontSize: '14px',
                                offsetX: 2,
                                offsetY: 2,
                            },
                        },
                    });

                    const infowindow = new google.maps.InfoWindow({
                        content: generateInfoWindowContent(punto, sensores),
                    });

                    marker.addListener("click", () => {
                        infowindow.open(map, marker);
                    });
                    
                   
                } else {
                    console.error(`Coordenadas no válidas para la estación ${punto.codigo_estacion}`);
                }
            });
        })
        .catch(error => {
            console.log(error);
        });
} 

function esta(codigo) {
    window.location.href = "/estacion/" + codigo;
}

function formatHour24To12(hour24) {
    const [hour, minute] = hour24.split(':');
    const period = hour < 12 ? 'AM' : 'PM';
    const hour12 = hour % 12 || 12;

    return `${hour12}:${minute} ${period}`;
}

function generateInfoWindowContent(punto, sensores) {
  const currentDate = new Date();

  const tableRows = sensores
    .filter(sensor => sensor.codigo_estacion === punto.codigo_estacion && sensor.codigo === punto.codigo_estacion)
    .map(sensor => {
      const formattedHour = formatHour24To12(sensor.hora);
      const sensorDate = new Date(sensor.date);

      const isOnline = sensorDate.getFullYear() === currentDate.getFullYear() &&
                       sensorDate.getMonth() === currentDate.getMonth() &&
                       sensorDate.getDate() === currentDate.getDate();

      const statusIcon = isOnline
        ? '<i class="fa fa-check" style="color: #5cb85c;"></i>'
        : '<i class="fas fa-exclamation-triangle" style="color: #f0ad4e;"></i>';

      return `<tr>
                  <td>${statusIcon} ${sensor.nombre_sensor}</td>
                  <td>${sensor.date} ${formattedHour}</td>
                  <td>${isNumeric(sensor.value) ? `${sensor.value} ${sensor.unidad}` : `<a href="javascript:void(0)" data-toggle="popover" title="Dato Anomalo: ${sensor.value}" data-content="${sensor.value}"><i class="fas fa-exclamation-triangle" style="color: #d9534f;"></i></a>`}</td>
              </tr>`;
    })
    .join('');

  return `<div class="row">
            <div class="col-md-6">
                <div class="container text-center"> 
                    <img src="https://triana.lenington.co/estacion.jpg" class="img-thumbnail img-fluid" alt="Cinque Terre" style="margin-left: auto; margin-right: auto; max-width: 100%;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">  
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>Estacion</th>
                                <th>${punto.nombre_estacion}</th>        
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Codigo</td>
                                <td>${punto.codigo_estacion}</td>        
                            </tr>
                            <tr>
                                <td>Categoria</td>
                                <td>${punto.categoria_estacion}</td>        
                            </tr>
                            <tr>
                                <td>Departamento</td>
                                <td>${punto.departamento}</td>       
                            </tr>
                            <tr>
                                <td>Municipio</td>
                                <td>${punto.municipio}</td>       
                            </tr>
                            <tr>
                                <td>Latitud</td>
                                <td>${punto.lat}</td>       
                            </tr>
                            <tr>
                                <td>Longitud</td>
                                <td>${punto.lng}</td>       
                            </tr>
                             <tr>
                                <td>Procesos</td>
                                <td><div class="dropdown">
                                        <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm dropdown-toggle" style="background-color: #FFFFFF; color: #6c757d;" data-toggle="dropdown">
                                            Acciones
                                        </button>
                                        <div class="dropdown-menu">
                                            <h6 class="dropdown-header"> <i class="fas fa-table" style="color: #6c757d;"></i> Datos</h6>
                                            <a class="dropdown-item" onclick="esta('${punto.codigo_estacion}')" > <i class="fas fa-search" style="color: #007bff;"></i> Datos de Estacion</a>
                                            <h6 class="dropdown-header"> <i class="fas fa-table" style="color: #6c757d;"></i> Actualiza</h6>
                                            <a class="dropdown-item" onclick="actualiza()" > <i class="fas fa-sync" style="color: #007bff;"></i> Refresh</a>
                                        </div>
                                </div>
                                </td>       
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">            
            <table class="table table-sm table-responsive">
                <thead>
                    <tr>
                        <th>Sensor</th>
                        <th>Última Tx</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    ${tableRows}
                </tbody>
            </table>
        </div>`;
}


window.onload = function () {
  initMap();
  
};

function actualiza() {
 
}

</script>
