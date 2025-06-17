<section class="main-container">
    <div class="container">
        <div class="row">
            <!-- main start -->
            <div class="main col-md-12">
                <div class="panel-body">
                    <p>&nbsp;</p>

                    <center>
                        <big style="color: #333;">
                            Kenya National Wildlife Conservation involves protecting and managing the country's diverse wildlife and habitats, focusing on sustainable resource management and benefiting both the environment and the Kenyan people.
                        </big>
                    </center>

                    <center>&nbsp;</center>

                    <div class="text-center">
                        <button class="btn" style="background-color: #004d00; color: #fff; border: none;">Read More</button>
                    </div>
                </div>
                <div class="panel-body">
                    <p>&nbsp;</p>
                            <p style:text-align="center">Kenya's National Parks and Reserves Distributions</p>
                    <center>
                        <div id="map" style="height: 600px; width: 100%;"></div>
                    </center>

                    <center>&nbsp;</center>

                </div>
                 <center>&nbsp;</center>
                <div class="mb-10">
                <div class="grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-4 gap-6">
                    <div class="card h-full rounded-xl overflow-hidden border-0">
                        <img src="<?= base_url('assets/images/card-component/card-img1.png') ?>" class="card-img-top" alt="">
                        <div class="card-body p-4">
                            <h5 class="card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5">
                                This is Card title
                            </h5>
                            <p class="card-text text-neutral-600 mb-4">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href="javascript:void(0)" class="btn text-primary-600 dark:text-primary-500 hover:underline px-0 py-2.5 inline-flex items-center gap-2">
                                Read More <iconify-icon icon="iconamoon:arrow-right-2" class="text-xl"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class="card h-full rounded-xl overflow-hidden border-0">
                        <img src="<?= base_url('assets/images/card-component/card-img2.png') ?>" class="card-img-top" alt="">
                        <div class="card-body p-4 text-center">
                            <h5 class="card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5">
                                This is Card title
                            </h5>
                            <p class="card-text text-neutral-600 mb-4">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href="javascript:void(0)" class="btn btn-primary-600 px-3 py-2.5 inline-flex items-center gap-2">
                                Read More <iconify-icon icon="iconamoon:arrow-right-2" class="text-xl"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class="card h-full rounded-xl overflow-hidden border-0">
                        <img src="<?= base_url('assets/images/card-component/card-img3.png') ?>" class="card-img-top" alt="">
                        <div class="card-body p-4 text-end">
                            <h5 class="card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5">
                                This is Card title
                            </h5>
                            <p class="card-text text-neutral-600 mb-4">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <div class="flex flex-wrap items-center justify-end gap-3">
                                <a href="javascript:void(0)" class="btn btn-primary-100 bg-primary-100 hover:bg-primary-600 dark:bg-primary-600/25 dark:hover:bg-primary-600 hover:text-white text-primary-600 dark:text-primary-500 px-3 py-2.5 inline-flex items-center gap-2">
                                    Read More <iconify-icon icon="iconamoon:arrow-right-2" class="text-xl"></iconify-icon>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card h-full rounded-xl overflow-hidden border-0">
                        <img src="<?= base_url('assets/images/card-component/card-img4.png') ?>" class="card-img-top" alt="">
                        <div class="card-body p-4 text-center">
                            <h5 class="card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5">
                                This is Card title
                            </h5>
                            <p class="card-text text-neutral-600 mb-4">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <button class="btn btn-primary-600 px-3 py-2.5 inline-flex items-center gap-2">
                                <iconify-icon icon="iconamoon:arrow-right-2" class="text-xl"></iconify-icon>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
            <!-- main end -->
        </div>
    </div>
</section>
<?= $this->section('script') ?>
<script>
    const map = L.map('map').setView([0.0236, 37.9062], 6); // Kenya lat/lng

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const parks = <?= json_encode($parks) ?>;

    parks.forEach(park => {
        const customIcon = L.icon({
            iconUrl: `/assets/images/icons/${park.icon_url}`, // dynamically use park icon
            iconSize: [32, 32], // adjust size as needed
            iconAnchor: [16, 32], // point of the icon which will correspond to marker's location
            popupAnchor: [0, -32] // position of the popup relative to the icon
        });

        L.marker([park.latitude, park.longitude], { icon: customIcon })
            .addTo(map)
            .bindPopup(`<strong>${park.name}</strong><br>
                        Location: ${park.location}<br>
                        Established: ${park.establishment}<br>
                        Major Species: ${park.major_species}`);
    });
</script>



<?= $this->endSection() ?>
