
<h2>Park Locations</h2>
<div id="map"></div>

<script>
    $(function(){
        var markers = [
            <?php foreach($parks as $park): ?>
            {
                latLng: [<?= $park->latitude ?>, <?= $park->longitude ?>],
                name: "<?= addslashes($park->name) ?>",
                style: { r: 8, fill: 'red' }
            },
            <?php endforeach; ?>
        ];

        $('#map').vectorMap({
            map: 'world_mill_en',
            backgroundColor: '#f4f4f4',
            markers: markers,
            onMarkerTipShow: function(event, label, index){
                var parkData = <?= json_encode($parks) ?>;
                var park = parkData[index];
                label.html(
                    '<strong>' + park.name + '</strong><br>' +
                    'Location: ' + park.location + '<br>' +
                    'Established: ' + park.establishment + '<br>' +
                    'Major Species: ' + park.major_species
                );
            }
        });
    });
</script>

