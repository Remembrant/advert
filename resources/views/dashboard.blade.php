<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900">
                    <style>
                        #map {
                            width: 100%;
                            height: 450px;
                        }
                    </style>
                
                
                <div id="map"></div>
                
                <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
            

                <script>
                    var map = L.map('map').setView([-25.7479, 28.2293], 10); // Center on Pretoria
                
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; OpenStreetMap contributors'
                    }).addTo(map);
                
                    var icons = {
                        red: L.icon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png', iconSize: [25, 41] }),
                        orange: L.icon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-orange.png', iconSize: [25, 41] }),
                        green: L.icon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png', iconSize: [25, 41] })
                    };
                
                    var sites = @json($sites); // Fetch from site table
                
                    console.log("Sites Data:", sites); // Debugging output
                
                    if (Array.isArray(sites)) {
                        sites.forEach(site => {
                            if (site.lat && site.lng) { // Ensure lat/lng exist
                                L.marker([parseFloat(site.lat), parseFloat(site.lng)], { 
                                    icon: icons[site.color] || icons.red // Default to red if color missing
                                }).addTo(map)
                                  .bindPopup(`Site ID: ${site.id} - Name: ${site.name}`);
                            } else {
                                console.warn("Skipping site with missing lat/lng:", site);
                            }
                        });
                    } else {
                        console.error("Sites data is not an array:", sites);
                    }
                </script>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
