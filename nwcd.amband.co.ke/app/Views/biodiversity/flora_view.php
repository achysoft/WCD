<!DOCTYPE html>
<html lang="en" data-theme="light">
<style>
  .datatable-wrapper {
    overflow-x: auto;
  }

  table.datatable {
    width: 100%;
    min-width: 1000px; /* force horizontal scroll on smaller screens */
    border-collapse: collapse;
  }
</style>
<?= $this->include('./partials/head') ?>

<body class="bg-neutral-100 text-neutral-900">

    <!-- ..::  header area start ::.. -->
    <?= $this->include('./partials/header') ?>
    <!-- ..::  header area end ::.. -->

    <!-- Banner -->
    <div class="w-full h-64 bg-cover bg-center mb-4 shadow" style="background-image: url('<?= base_url('assets/images/ecosystem/flora.jpg') ?>');">
        <div class="w-full h-full bg-black bg-opacity-50 flex items-center justify-center rounded-lg">
            <h3 class="text-white text-3xl md:text-4xl font-bold">Flora Ecosystem</h3>
        </div>
    </div>
<div class="container">
<div class="container mx-auto mt-12 px-4">
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">

    <!-- Mountain -->
    <div class="bg-white border shadow rounded p-4 flex items-center gap-4">
      <!-- Heroicon: Mountain (use Academic Cap for example) -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
      </svg>
      <div>
        <h6 class="text-sm font-semibold text-gray-700 mb-1">Mountain</h6>
        <p class="text-base text-gray-900"><?= $mountain ?></p>
      </div>
    </div>

    <!-- Savannah -->
    <div class="bg-white border shadow rounded p-4 flex items-center gap-4">
      <!-- Heroicon: Paw (symbolic, use Eye) -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12h.01M9 12h.01M12 12h.01M9 16h6" />
      </svg>
      <div>
        <h6 class="text-sm font-semibold text-gray-700 mb-1">Savannah</h6>
        <p class="text-base text-gray-900"><?= $savannah ?></p>
      </div>
    </div>

    <!-- Coastal -->
    <div class="bg-white border shadow rounded p-4 flex items-center gap-4">
      <!-- Heroicon: Beach (use Sun icon) -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m6.364 1.636l-.707.707M21 12h-1m-1.636 6.364l-.707-.707M12 21v-1m-6.364-1.636l.707-.707M3 12h1m1.636-6.364l.707.707M12 7a5 5 0 000 10 5 5 0 000-10z" />
      </svg>
      <div>
        <h6 class="text-sm font-semibold text-gray-700 mb-1">Coastal</h6>
        <p class="text-base text-gray-900"><?= $coastal ?></p>
      </div>
    </div>

    <!-- Forest -->
    <div class="bg-white border shadow rounded p-4 flex items-center gap-4">
      <!-- Heroicon: Tree (use Leaf icon substitute like Globe) -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 000 20 10 10 0 000-20z" />
      </svg>
      <div>
        <h6 class="text-sm font-semibold text-gray-700 mb-1">Forest</h6>
        <p class="text-base text-gray-900"><?= $forest ?></p>
      </div>
    </div>

    <!-- Wetland -->
    <div class="bg-white border shadow rounded p-4 flex items-center gap-4">
      <!-- Heroicon: Water -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-cyan-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 008 0 4 4 0 008 0" />
      </svg>
      <div>
        <h6 class="text-sm font-semibold text-gray-700 mb-1">Wetland</h6>
        <p class="text-base text-gray-900"><?= $wetland ?></p>
      </div>
    </div>

    <!-- Desert -->
    <div class="bg-white border shadow rounded p-4 flex items-center gap-4">
      <!-- Heroicon: Sun -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.485-8.485h-1m-16 0H3m15.364 6.364l-.707-.707M4.343 4.343l.707.707m0 12.728l-.707-.707M19.657 4.343l-.707.707M12 7a5 5 0 000 10 5 5 0 000-10z" />
      </svg>
      <div>
        <h6 class="text-sm font-semibold text-gray-700 mb-1">Desert and Arid</h6>
        <p class="text-base text-gray-900"><?= $desert ?></p>
      </div>
    </div>

    <!-- Freshwater -->
    <div class="bg-white border shadow rounded p-4 flex items-center gap-4">
      <!-- Heroicon: Tint (use Drop) -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3.5S7 9 7 13a5 5 0 1010 0c0-4-5-9.5-5-9.5z" />
      </svg>
      <div>
        <h6 class="text-sm font-semibold text-gray-700 mb-1">Freshwater</h6>
        <p class="text-base text-gray-900"><?= $freshwater ?></p>
      </div>
    </div>

    <!-- Marine -->
    <div class="bg-white border shadow rounded p-4 flex items-center gap-4">
      <!-- Heroicon: Fish (use Cube or Wave style) -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6m6.364-6.364a9 9 0 11-12.728 0" />
      </svg>
      <div>
        <h6 class="text-sm font-semibold text-gray-700 mb-1">Marine</h6>
        <p class="text-base text-gray-900"><?= $marine ?></p>
      </div>
    </div>

  </div>
</div>

</div>
<!-- Ecosystem Dropdowns -->
<div class="container mx-auto mt-12 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <!-- Ecosystem Type -->
      <div class="w-full">
        <label for="ecosystem-type" class="block mb-1 text-sm font-medium text-gray-700">Select Ecosystem Type</label>
        <select id="ecosystem-type" class="w-full p-2 border border-gray-300 rounded">
          <option value="">-- Select Ecosystem Type --</option>
          <?php foreach ($ecosystemTypes as $type): ?>
            <option value="<?= $type->id ?>"><?= $type->name ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- Ecosystem -->
      <div class="w-full">
        <label for="ecosystem" class="block mb-1 text-sm font-medium text-gray-700">Select Ecosystem</label>
        <select id="ecosystem" class="w-full p-2 border border-gray-300 rounded bg-gray-100" disabled>
          <option value="">-- Select Ecosystem --</option>
        </select>
      </div>

    </div>

    <!-- Content placeholder -->
    <div id="ecosystem-content" class="mt-6 text-sm text-gray-600"></div>
</div>
<!-- Image Modal -->
<div 
  x-data="{ show: false, image: '', caption: '' }" 
  x-show="show" 
  x-transition 
  x-on:open-modal.window="show = true; image = $event.detail.image; caption = $event.detail.caption"
  @keydown.escape.window="show = false"
  class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-80 p-4"
  style="display: none;"
  x-cloak
>
  <div class="relative bg-white rounded-lg shadow-lg overflow-hidden max-w-3xl w-full">
    <button @click="show = false"
            class="absolute top-2 right-2 text-gray-700 hover:text-red-600 text-2xl font-bold">
      &times;
    </button>

    <img :src="image" alt="" class="w-full max-h-[80vh] object-contain">
    <div class="p-4 text-center">
      <h2 class="text-lg font-semibold text-gray-800" x-text="caption"></h2>
    </div>
  </div>
</div>

    <!-- Scripts -->
    <?= $this->include('./partials/script') ?>
<script>
  $(document).ready(function () {
    // Load ecosystems based on selected type
    $('#ecosystem-type').on('change', function () {
      const typeId = $(this).val();

      if (typeId) {
        $('#ecosystem')
          .prop('disabled', true)
          .addClass('bg-gray-100')
          .html('<option>Loading...</option>');

        $.ajax({
          url: '<?= base_url('biodiversity/flora/get_ecosystems_by_type'); ?>',
          type: 'POST',
          data: { type_id: typeId },
          dataType: 'json',
          success: function (data) {
            let options = '<option value="">-- Select Ecosystem --</option>';
            data.forEach(function (item) {
              options += `<option value="${item.id}">${item.name}</option>`;
            });

            $('#ecosystem')
              .html(options)
              .prop('disabled', false)
              .removeClass('bg-gray-100');

            // Clear flora content when type changes
            $('#ecosystem-content').html('');
          },
          error: function () {
            $('#ecosystem')
              .html('<option>Error loading ecosystems</option>')
              .addClass('bg-red-100 text-red-700');
          }
        });
      } else {
        $('#ecosystem')
          .html('<option value="">-- Select Ecosystem --</option>')
          .prop('disabled', true)
          .addClass('bg-gray-100');
        $('#ecosystem-content').html('');
      }
    });

    // Load flora species as cards when ecosystem is selected
    $('#ecosystem').on('change', function () {
      const ecosystemId = $(this).val();

      if (ecosystemId) {
        $('#ecosystem-content').html('<p class="text-gray-500">Loading flora species...</p>');

        $.ajax({
          url: '<?= base_url('biodiversity/flora/get_flora_by_ecosystem'); ?>',
          type: 'POST',
          data: { ecosystem_id: ecosystemId },
          dataType: 'json',
          success: function (res) {
            let html = '';

            // Append the ecosystem template if available
            if (res.template) {
              html += `<div class="mb-6 bg-white p-4 rounded shadow prose max-w-none">${res.template}</div>`;
            }

            // Append flora cards
          if (res.flora.length > 0) {
            html += `
              <h2 class="text-2xl font-semibold text-gray-800 mb-4">Major Species</h2>
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            `;
              res.flora.forEach(function (species) {
                html += `
                  <div class="bg-white rounded shadow p-4 hover:shadow-md transition">
                    <a href="javascript:void(0)" 
                      onclick="window.dispatchEvent(new CustomEvent('open-modal', { detail: { image: '<?= base_url('uploads/flora/') ?>${species.image}', caption: '${species.common_name}' } }))">
                      <img src="<?= base_url('uploads/flora/') ?>${species.image}" 
                          alt="${species.common_name}" 
                          class="w-full object-cover rounded cursor-pointer hover:scale-105 transition-transform duration-200">

                    </a>
                    <h3 class="mt-3 text-lg font-semibold text-gray-800">${species.common_name}</h3>
                    <p class="text-sm italic text-green-700">${species.scientific_name}</p>
                    <p class="mt-2 text-gray-600 text-sm">${species.description}</p>
                  </div>
                `;
              });
              html += '</div>';
            } else {
              html += '<p class="text-yellow-600">No flora species found for this ecosystem.</p>';
            }

            $('#ecosystem-content').html(html);
          },
          error: function () {
            $('#ecosystem-content').html('<p class="text-red-600">Error loading flora species. Please try again.</p>');
          }
        });
      } else {
        $('#ecosystem-content').html('');
      }
    });
  });
</script>


    <!-- Footer -->
    <?= $this->include('./partials/footer') ?>
    <?= $this->renderSection('./script') ?>
</body>
</html>
