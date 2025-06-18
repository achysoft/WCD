<!DOCTYPE html>
<html lang="en" data-theme="light">

<?= $this->include('./partials/head') ?>

<body class="bg-neutral-100 text-neutral-900">

    <!-- ..::  header area start ::.. -->
    <?= $this->include('./partials/header') ?>
    <!-- ..::  header area end ::.. -->

    <!-- Banner -->
    <div class="w-full h-64 bg-cover bg-center mb-4 shadow" style="background-image: url('<?= base_url('assets/images/parks-banner.jpg') ?>');">
        <div class="w-full h-full bg-black bg-opacity-50 flex items-center justify-center rounded-lg">
            <h3 class="text-white text-3xl md:text-4xl font-bold">Explore Our Parks</h3>
        </div>
    </div>

    <!-- Content -->
    <section class="main-container">
        <div class="container mx-auto pt-4 pb-8">

            <!-- Park selection dropdown -->
            <div class="mb-6">
                <label for="parkSelect" class="block mb-2 font-medium">Select a Park</label>
                <select id="parkSelect" class="w-full md:w-1/3 p-2 border rounded">
                    <option value="">-- Choose a Park --</option>
                    <?php foreach ($parks as $park): ?>
                        <option value="<?= esc($park['id']) ?>"><?= esc($park['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Selected park info -->
            <div id="selectedPark" class="mt-6"></div>

            <!-- Leaflet map -->
            <div id="map" class="w-full h-96 rounded-lg shadow mb-6"></div>

          
        </div>
    </section>

    <!-- Scripts -->
    <?= $this->include('./partials/script') ?>
<script>
        const parks = <?= json_encode($parks) ?>;
    const map = L.map('map'); // Don't use setView — we'll use fitBounds instead

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const bounds = [];

    parks.forEach(park => {
        if (park.latitude && park.longitude) {
            const icon = L.icon({
                iconUrl: `/assets/images/icons/${park.icon_url}`,
                iconSize: [32, 32],
                iconAnchor: [16, 32],
                popupAnchor: [0, -32]
            });

            L.marker([park.latitude, park.longitude], { icon: icon })
                .addTo(map)
                .bindPopup(`<strong>${park.name}</strong><br>${park.description}`);

            bounds.push([park.latitude, park.longitude]);
        }
    });

    // ✅ Automatically fit all park markers with reasonable padding and max zoom
    if (bounds.length) {
        map.fitBounds(bounds, {
            padding: [50, 50],
            maxZoom: 8 // Optional: Prevents zooming in too much
        });
    }

    // Handle dropdown selection
    document.getElementById('parkSelect').addEventListener('change', function () {
        const selectedId = this.value;
        const display = document.getElementById('selectedPark');
        display.innerHTML = '';

        if (selectedId === '') return;

        const park = parks.find(p => p.id == selectedId);
        if (park) {
            display.innerHTML = `
                <div class="card w-full bg-white shadow rounded-lg mb-6">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2">${park.name}</h2>
                        <p class="text-gray-700">${park.description}</p>
                    </div>
                </div>
            `;

            // Zoom in closer to the selected park
            map.setView([park.latitude, park.longitude], 10);
        }
    });
</script>

    <!-- Footer -->
    <?= $this->include('./partials/footer') ?>
    <?= $this->renderSection('./script') ?>
</body>
</html>
