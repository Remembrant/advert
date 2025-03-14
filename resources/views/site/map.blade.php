<x-layout>


    <style>
        #map { width: 1000px; height: 500px;}
    </style>

<div id="map"></div>

<script>
       document.addEventListener("DOMContentLoaded", function () {
        var map = L.map('map').setView([-26.0, 28.1], 9);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Define marker icons
        var icons = {
            red: L.icon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png', iconSize: [25, 41] }),
            orange: L.icon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-orange.png', iconSize: [25, 41] }),
            green: L.icon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png', iconSize: [25, 41] })
        };

        var markers = {}; // Store marker instances

        @foreach ($markers as $marker)
            var marker{{ $marker->id }} = L.marker([{{ $marker->lat }}, {{ $marker->lng }}], {
                icon: icons["{{ $site->color }}"] || icons.red
            }).addTo(map);

            // Click event to open a popup with a form
            site{{ $site->id }}.on('click', function () {
                var popupContent = `
                    <b>{{ $site->name }}</b><br>
                    <form action="/site/{{ $site->id }}" method="POST" onsubmit="return submitForm(this, event, {{ $marker->id }})">
                        @csrf
                        @method('PUT')
                        <select name="color">
                            <option value="green" ${'{{ $site->color }}' === 'green' ? 'selected' : ''}>✅ Online</option>
                            <option value="orange" ${'{{ $site->color }}' === 'orange' ? 'selected' : ''}>⚠️ Pending</option>
                            <option value="red" ${'{{ $site->color }}' === 'red' ? 'selected' : ''}>❌ Offline</option>
                        </select>
                        <button type="submit">Update</button>
                    </form>
                `;
                site{{ $site->id }}.bindPopup(popupContent).openPopup();
            });

            sites[{{ $site->id }}] = site{{ $site->id }};
        @endforeach
    });

    // Handle form submission without full reload
    function submitForm(form, event, id) {
        event.preventDefault(); // Prevent full reload

        var formData = new FormData(form);
        var color = formData.get("color");

        if (!color) {
            alert("Please select a status color.");
            return;
        }

        fetch(form.action, {
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                return response.text().then(text => { throw new Error(text) });
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                markers[id].setIcon(icons[color]); // Change marker color instantly
                setTimeout(() => location.reload(), 1000); // Refresh after 1 second
            } else {
                alert("Error: " + data.message);
            }
        })
        .catch(error => {
            console.error("Update failed:", error);
            alert("Update failed! Check console for details.");
        });

        return false;
    }
</script>
</x-layout>