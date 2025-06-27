<head>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>NWCD - National Wildlife Conservation Database</title>
  <link rel="icon" href="<?= base_url('assets/images/favicon.png') ?>" sizes="16x16" type="image/png">
<script src="https://cdn.tailwindcss.com"></script>
  <!-- ✅ Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

  <!-- ✅ Bootstrap CSS (place this BEFORE your custom styles) -->

  
  <!-- Icons and plugins -->
  <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/remixicon.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/apexcharts.css') ?>">
    <!-- DataTables CSS (no default theme, minimal styling) -->
  <!-- DataTables CSS (no default theme, minimal styling) -->
 <link rel="stylesheet" href="<?= base_url('assets/css/lib/jquery.dataTables.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/lib/responsive.dataTables.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/lib/buttons.dataTables.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/css/lib/editor-katex.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/editor.atom-one-dark.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/editor.quill.snow.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/flatpickr.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/full-calendar.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/jquery-jvectormap-2.0.5.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/magnific-popup.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/leaflets.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/slick.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/prism.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/file-upload.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lib/audioplayer.css') ?>">

  <!-- ✅ Your custom style (after Bootstrap) -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
 <style>
  :is(.dark h1),
  :is(.dark h2),
  :is(.dark h3),
  :is(.dark h4),
  :is(.dark h5),
  :is(.dark h6),
  :is(.dark a),
  :is(.dark p),
  :is(.dark span),
  :is(.dark strong) {
    --tw-text-opacity: 1;
    color: inherit;
  }
/* Disable the dark card background override globally */
:is(.dark .card) {
    background-color: unset !important;
}

  #map {
    z-index: 0;
    position: relative;
  }
</style> 
</head>
