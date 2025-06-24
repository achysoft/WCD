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
            <h3 class="text-white text-3xl md:text-4xl font-bold">Policy Publications</h3>
        </div>
    </div>

    <!-- Content -->
   <div class="max-w-4xl mx-auto py-10 px-4">

  <ol class="space-y-4">
    <?php $i = 1; foreach ($publications_list as $pub): ?>
      <li class="bg-white p-4 shadow rounded">
        <h3 class="text-lg font-semibold"><?= $i ?>. <?= esc($pub['title']) ?></h3>
        <div class="text-sm text-gray-600 mt-1">
          <strong>Date:</strong> <?= esc($pub['publication_date']) ?> |
          <strong>Author:</strong> <?= esc($pub['author'] ?? 'N/A') ?>
        </div>
        <p class="mt-2 text-gray-700"><?= nl2br(esc($pub['description'])) ?></p>

        <?php if (!empty($pub['file'])): ?>
          <a href="javascript:void(0)"
            onclick="openPdfModal('<?= base_url('uploads/policy/' . $pub['file']) ?>')"
            class="mt-3 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            View PDF
            </a>
        <?php endif; ?>
      </li>
    <?php $i++; endforeach; ?>
  </ol>
  <?php if ($total_pages > 1): ?>
  <div class="mt-8 flex justify-center space-x-1">
    <?php for ($p = 1; $p <= $total_pages; $p++): ?>
      <a href="?page=<?= $p ?>"
         class="px-4 py-2 border rounded <?= $p == $current_page ? 'bg-blue-600 text-white' : 'bg-white text-gray-800 hover:bg-blue-100' ?>">
        <?= $p ?>
      </a>
    <?php endfor; ?>
  </div>
<?php endif; ?>
</div>
<!-- PDF Modal -->
<div id="pdfModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-60 flex items-center justify-center">
  <div class="relative w-full max-w-4xl h-[80vh] bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Close Button -->
    <button onclick="closePdfModal()" class="absolute top-2 right-2 text-gray-600 hover:text-red-500 text-2xl font-bold">&times;</button>

    <!-- PDF Viewer -->
    <iframe id="pdfViewer" class="w-full h-full" src="" frameborder="0"></iframe>
  </div>
</div>

    <!-- Scripts -->
    <?= $this->include('./partials/script') ?>
<script>
  function openPdfModal(pdfUrl) {
    const modal = document.getElementById('pdfModal');
    const iframe = document.getElementById('pdfViewer');
    iframe.src = pdfUrl;
    modal.classList.remove('hidden');
  }

  function closePdfModal() {
    const modal = document.getElementById('pdfModal');
    const iframe = document.getElementById('pdfViewer');
    iframe.src = '';
    modal.classList.add('hidden');
  }
</script>

</script>
    <!-- Footer -->
    <?= $this->include('./partials/footer') ?>
    <?= $this->renderSection('./script') ?>
</body>
</html>
