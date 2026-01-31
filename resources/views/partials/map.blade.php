   <section class="h-64 sm:h-80 md:h-96 w-full">
      <div id="map" class="w-full h-full transition duration-700"></div>
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
      
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          // Initialize map
          const map = L.map('map', { scrollWheelZoom: false }).setView([22.98115258902039, 88.428955078125], 9);
          
          // Add tile layer
          L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '© OpenStreetMap contributors, © CartoDB',
            maxZoom: 19
          }).addTo(map);
          
          // Create bounds group to fit all markers
          const markerGroup = L.featureGroup();
          
          // Kolkata marker
          const kolkataMarker = L.marker([22.5726, 88.3639], {
            icon: L.icon({
              iconUrl: '{{ asset("images/airport.png") }}',
              iconSize: [50, 50],
              iconAnchor: [25, 25],
              popupAnchor: [0, -25]
            })
          }).bindPopup('<div class="font-bold text-stone-900">Kolkata</div><p class="text-sm">West Bengal Capital</p>', {
            closeButton: true,
            autoClose: false
          });
          markerGroup.addLayer(kolkataMarker);
          
          // Birnagar marker
          const birnagarMarker = L.marker([23.2457, 88.5529], {
            icon: L.icon({
              iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
              shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
              iconSize: [25, 41],
              iconAnchor: [12, 41],
              popupAnchor: [1, -34],
              shadowSize: [41, 41]
            })
          }).bindPopup('<div class="font-bold text-stone-900">Birnagar</div><p class="text-sm">Nadia, West Bengal</p><p class="text-xs text-saffron-600">Birnagar Temple</p>', {
            closeButton: true,
            autoClose: false
          });
          markerGroup.addLayer(birnagarMarker);
          
          // Mayapur marker
          const mayapurMarker = L.marker([23.3581, 88.4176], {
            icon: L.icon({
              iconUrl: '{{ asset("images/tovp.png") }}',
              iconSize: [50, 50],
              iconAnchor: [25, 25],
              popupAnchor: [0, -25]
            })
          }).bindPopup('<div class="font-bold text-stone-900">Mayapur</div><p class="text-sm">Nadia, West Bengal</p><p class="text-xs text-saffron-600">ISKCON Temple</p>', {
            closeButton: true,
            autoClose: false
          });
          markerGroup.addLayer(mayapurMarker);
          
          // Add marker group to map
          markerGroup.addTo(map);
          
          // Log zoom level when zoom changes
          map.on('zoomend', function() {
            console.log('Zoom level:', map.getZoom());
          });
          
          // Create custom legend
          const legend = L.control({ position: 'bottomleft' });
          
          legend.onAdd = function(map) {
            const div = L.DomUtil.create('div', 'leaflet-control leaflet-bar');
            //ERROR HERE Todo: Fix the legend content
            div.innerHTML = `
              <div style="background: white; padding: 12px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.2); font-family: Arial, sans-serif; font-size: 13px;">
                
                <div style="display: flex; align-items: center;">
                  <div style="width: 20px; height: 20px; background-color: #ED4444; border-radius: 3px; margin-right: 8px;"></div>
                  <span style="color: #555;">Birnagar</span>
                </div>
                  
              </div>
            `;
            L.DomEvent.disableClickPropagation(div);
            return div;
          };
          
          legend.addTo(map);
        });
      </script>
    </section>