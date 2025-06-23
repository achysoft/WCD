<!DOCTYPE html>
<html lang="en" data-theme="light">

<?= $this->include('./partials/head') ?>

<body class="bg-neutral-100 text-neutral-900">

    <!-- ..::  header area start ::.. -->
    <?= $this->include('./partials/header') ?>
    <!-- ..::  header area end ::.. -->

    <!-- Banner -->
    <div class="w-full h-64 bg-cover bg-center mb-4 shadow" style="background-image: url('<?= base_url('assets/images/carousel/banner3.jpg') ?>');">
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
<div class="container mx-auto pt-4 pb-6">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

    <!-- First Column: Horizontal Bar Chart -->
    <div class="card h-full rounded-lg border-0 shadow">
      <div class="card-body p-6">
        <div id="parkSizesChart" class="w-full min-h-[400px]"></div>
      </div>
    </div>

    <!-- Second Column: Donut Chart -->
    <div class="card h-full rounded-lg border-0 shadow">
      <div class="card-body p-6">
        <div id="parkdonurtChart" class="w-full min-h-[400px]"></div>
      </div>
    </div>

  </div>
</div>

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
<script>
  // Original park data from PHP
  const parkData = <?= json_encode($parks) ?>;

  const allParkNames = parkData.map(p => p.name);
  const allParkSizes = parkData.map(p => {
    const size = parseFloat(String(p.size_km).replace(/[^0-9.]/g, ''));
    return isNaN(size) ? 0 : size;
  });

  let barChart, donutChart;

  function renderCharts(names, sizes) {
    const maxSize = Math.max(...sizes);
    const paddedMax = Math.ceil(maxSize / 1000) * 1000 + 1000;

    if (barChart) barChart.destroy();
    if (donutChart) donutChart.destroy();

    // Bar chart (vertical)
    barChart = new ApexCharts(document.querySelector("#parkSizesChart"), {
      chart: {
        type: 'bar',
        height: 450,
        toolbar: { show: true }
      },
      title: {
        text: 'Size of Parks (in km²)',
        align: 'center'
      },
      xaxis: {
        categories: names,
        labels: { rotate: -45, style: { fontSize: '12px' } },
        title: { text: 'Parks' }
      },
      yaxis: {
        max: paddedMax,
        title: { text: 'Size (km²)' },
        labels: {
          formatter: val => Number(val).toLocaleString(),
          style: { fontSize: '12px' }
        }
      },
      series: [{
        name: 'Size',
        data: sizes
      }],
      dataLabels: {
        enabled: true,
        formatter: val => Number(val).toLocaleString()
      },
      grid: {
        padding: { left: 70, right: 20 }
      },
      colors: ['#00B8D9']
    });

    barChart.render();

    // Donut chart
    const total = sizes.reduce((sum, val) => sum + val, 0);
    if (total > 0) {
      donutChart = new ApexCharts(document.querySelector("#parkdonurtChart"), {
        chart: {
          type: 'donut',
          height: 400
        },
        title: {
          text: 'Park Size Distribution',
          align: 'center'
        },
        labels: names,
        series: sizes,
        legend: { show: false },
        tooltip: {
          y: {
            formatter: val => Number(val).toLocaleString() + ' km²'
          }
        },
        dataLabels: {
          formatter: function (val, opts) {
            return names[opts.seriesIndex] + ": " + val.toFixed(1) + "%";
          }
        },
        colors: ['#008FFB', '#00E396', '#FEB019', '#FF4560', '#775DD0', '#546E7A', '#26a69a', '#D10CE8']
      });

      donutChart.render();
    } else {
      document.querySelector("#parkdonurtChart").innerHTML =
        '<p class="text-center text-red-600">No valid data for donut chart.</p>';
    }
  }

  // Initial load with all parks
  renderCharts(allParkNames, allParkSizes);

  // On park selection
  document.getElementById('parkSelect').addEventListener('change', function () {
    const selectedId = this.value;

    if (!selectedId) {
      renderCharts(allParkNames, allParkSizes);
      return;
    }

    const selectedPark = parkData.find(p => p.id == selectedId);
    if (!selectedPark) return;

    const name = selectedPark.name;
    const size = parseFloat(String(selectedPark.size_km).replace(/[^0-9.]/g, ''));
    const cleanSize = isNaN(size) ? 0 : size;

    renderCharts([name], [cleanSize]);
  });
</script>
    <!-- Footer -->
    <?= $this->include('./partials/footer') ?>
    <?= $this->renderSection('./script') ?>
</body>
</html>
