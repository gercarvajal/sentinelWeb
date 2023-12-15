<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mapa de Calor</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet.heat@0.2.0/dist/leaflet-heat.js"></script>
</head>
<body>
    <CENTER>
    <div id="map" style="width: 1000px; height: 800px;"></div>
    </CENTER>
    <script>
        // ESTE CODIGO ME DEFINE LAS COORDENADAS DONDE QUIERO QUE HAGA EL ZOOM
        // ES DECIR QUE LAS COORDENADAS SEAN LLAMADAS DESDE LA BD

        var defaultLat = -29.906047;
        var defaultLng = -71.266519;

        var map = L.map('map', {
            center: [defaultLat, defaultLng],
            zoom: 20
        });

        // EL SIGUIENTE CODIGO ES EL MAPA COMO TAL ES LA API
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // EL SIGUIENTE CODIGO ES LA MARCA DE CALOR, SE PUEDE RECULAR EL COLOR Y SU INTENSIDAD
        var coordinates = [];
        var heatLayer = L.heatLayer([], {
            radius: 20,
            blur: 15,
            maxZoom: 10,
            gradient: { 0.2: 'blue', 0.4: 'lime', 0.6: 'yellow', 0.8: 'orange', 1: 'red' }
        }).addTo(map);

        var pointCounts = {};

        // AQUI SE AGREGAN LOS MARCADORES DEL MAPA DE CALOR
        function addHeatmapMarker(lat, lng) {
            var pointKey = lat + '-' + lng;

            if (!isNaN(lat) && !isNaN(lng)) {
                if (!pointCounts[pointKey]) {
                    pointCounts[pointKey] = 1;
                } else {
                    pointCounts[pointKey]++;
                }
                var intensity = pointCounts[pointKey] / 30; // AQUI LA INTENSIDAD
                coordinates.push([lat, lng, intensity]);
                heatLayer.setLatLngs(coordinates);

                // ESTA WEA ES PA CALCULAR EL ÁREA DE LA MARCA
                var bounds = L.latLngBounds(coordinates);
                map.fitBounds(bounds);
            }
        }

        var lastProcessedID = -1;
        var lastProcessedTimestamp = 0;

        function updateHeatmap() {
            var url = 'update_coordenates.php'; // ESTA ES LA LÍNEA DONDE SE LLAMA AL PHP QUE TIENE LOS DATOS DE LA BD

            if (lastProcessedTimestamp === 0) {
                url += '?latest=true';
            } else {
                url += '?lastProcessedTimestamp=' + lastProcessedTimestamp;
            }

            // Utilizar fetch() en lugar de XMLHttpRequest
            fetch(url)
                .then(response => response.json())
                .then(newCoordinates => {
                    if (newCoordinates.length > 0) {
                        lastProcessedTimestamp = newCoordinates[0].timestamp;
                        coordinates = [];
                        for (var i = 0; i < newCoordinates.length; i++) {
                            addHeatmapMarker(newCoordinates[i].Latitud, newCoordinates[i].Longitud);
                        }
                    }
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        }

        setInterval(updateHeatmap, 1000); // Actualiza cada 1 segundo (ajusta el intervalo según tus necesidades)
    </script>
</body>
</html>


