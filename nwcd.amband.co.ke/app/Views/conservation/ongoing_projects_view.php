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
    <div class="w-full h-64 bg-cover bg-center mb-4 shadow" style="background-image: url('<?= base_url('assets/images/carousel/banner3.jpg') ?>');">
        <div class="w-full h-full bg-black bg-opacity-50 flex items-center justify-center rounded-lg">
            <h3 class="text-white text-3xl md:text-4xl font-bold">Ongoing Projects</h3>
        </div>
    </div>
<div class="container">
 <!-- Date Filters -->
<div class="flex flex-col md:flex-row gap-4 mb-4">
  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Start Date:</label>
    <input type="date" id="startDate" class="border border-gray-300 rounded px-3 py-2 shadow-sm focus:outline-none focus:ring focus:ring-blue-300 text-sm">
  </div>
  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">End Date:</label>
    <input type="date" id="endDate" class="border border-gray-300 rounded px-3 py-2 shadow-sm focus:outline-none focus:ring focus:ring-blue-300 text-sm">
  </div>
</div>

<!-- Responsive Table -->
    <div class="overflow-x-auto">
      <table id="projectsTable" class="display nowrap w-full" style="width:100%">
        <thead>
  <tr class="bg-gray-200 text-left">
    <th class="p-2">#</th>
    <th class="p-2">Project Name</th>
    <th class="p-2">Scope</th>
    <th class="p-2">Estimated Cost</th>
    <th class="p-2">Disbursed Amount</th>
    <th class="p-2">County</th>
    <th class="p-2">Start Date</th>
    <th class="p-2">End Date</th>
    <th class="p-2">Timeline</th>
    <th class="p-2">Status</th>
    <th class="p-2">Implementing Dept.</th>
    <th class="p-2">Supporting Depts.</th>
    <th class="p-2">Challenges/Remarks</th>
  </tr>
</thead>
<tbody>
  <?php foreach ($projects as $i => $project): ?>
    <tr class="bg-white border-b">
      <td class="p-2"><?= $i + 1 ?></td>
      <td class="p-2"><?= esc($project['project_name']) ?></td>
      <td class="p-2"><?= esc($project['project_scope']) ?></td>
      <td class="p-2"><?= number_format($project['estimated_project_cost'], 2) ?></td>
      <td class="p-2"><?= number_format($project['disbursed_amount'], 2) ?></td>
      <td class="p-2"><?= esc($project['county']) ?></td>
      <td class="p-2"><?= esc($project['start_date']) ?></td>
      <td class="p-2"><?= esc($project['end_date']) ?></td>
      <td class="p-2"><?= esc($project['timeline']) ?></td>
      <td class="p-2"><?= esc($project['status']) ?>%</td>
      <td class="p-2"><?= esc($project['implementing_department']) ?></td>
      <td class="p-2"><?= esc($project['supporting_departments']) ?></td>
      <td class="p-2"><?= esc($project['challenges_remarks']) ?></td>
    </tr>
  <?php endforeach; ?>
</tbody>

      </table>
    </div>
  </div>

    <!-- Scripts -->
    <?= $this->include('./partials/script') ?>

<script>
 $(document).ready(function () {
  const table = $('#projectsTable').DataTable({
    responsive: true,
    scrollX: true,
    autoWidth: false,
    dom: '<"flex flex-col md:flex-row justify-between items-center mb-4"Bf>rt<"flex justify-between items-center mt-4"lip>',
    buttons: [
  {
    extend: 'csvHtml5',
    text: '⬇️ Export CSV',
    className: 'dt-button bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded mr-2 transition duration-150 ease-in-out'
  },
  {
    extend: 'excelHtml5',
    text: '⬇️ Export Excel',
    className: 'dt-button bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded transition duration-150 ease-in-out'
  }
]
  });

  // Date filtering logic
  $.fn.dataTable.ext.search.push(function (settings, data) {
  const start = $('#startDate').val();
  const end = $('#endDate').val();
  
  // Adjusted indexes: Start Date is column 6, End Date is column 7
  const rowStart = new Date(data[6]); 
  const rowEnd = new Date(data[7]);

  if ((start && rowStart < new Date(start)) || (end && rowEnd > new Date(end))) {
    return false;
  }
  return true;
});

  $('#startDate, #endDate').on('change', function () {
    table.draw();
  });
});
</script>



    <!-- Footer -->
    <?= $this->include('./partials/footer') ?>
    <?= $this->renderSection('./script') ?>
</body>
</html>
