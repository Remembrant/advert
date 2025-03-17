<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-wrap gap-4">
                    <div class="w-24 h-24 bg-blue-500 text-white flex items-center justify-center rounded-lg shadow-md">1</div>
                    <div class="w-24 h-24 bg-green-500 text-white flex items-center justify-center rounded-lg shadow-md">2</div>
                    <div class="w-24 h-24 bg-red-500 text-white flex items-center justify-center rounded-lg shadow-md">3</div>
                </div>
                <div class="p-3 text-gray-900">
                   
                    
                </div>
            </div>
        </div>
    </div> --}}



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3 flex gap-4">
                <!-- Main Content -->
                <div class="p-1 text-gray-900 flex-1 min-w-[200px]">
                    <style>
                        #map {
                            width: 100%;
                            height: 450px;
                        }
                    </style>
                
                
                <div id="map"></div>
                
                {{-- <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script> --}}
            

                <script>
                    var map = L.map('map').setView([-26.2708, 28.1123], 8); // Center on Pretoria
                
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
                <!-- Cubes Container -->
                <div class="flex flex-col gap-3">

                    <div class="w-40 h-full bg-gray-100 text-gray-600 rounded-lg shadow-md flex items-center flex-col">
                        <div class="p-2 font-bold text-xl">Booked</div>
                        <div class="flex-1 p-6">{{$red}}</div>
                    </div>
                    <!-- Cube 2 -->
                    <div class="w-40 h-full bg-gray-100 text-gray-600 rounded-lg shadow-md flex items-center flex-col">
                        <div class="p-2 font-bold text-xl">Available</div>
                        <div class="flex-1 p-6">{{$green}}</div>
                    </div>
                    <!-- Cube 3 -->
                    <div class="w-40 h-full bg-gray-100 text-gray-600 rounded-lg shadow-md flex items-center flex-col">
                        <div class="p-2 font-bold text-xl">Pending</div>
                        <div class="flex-1 p-6">{{$orange}}</div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
