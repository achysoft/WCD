<!DOCTYPE html>
<html lang="en" data-theme="light">

<?= $this->include('./partials/head') ?>

<body class="bg-neutral-100 text-neutral-900">

    <!-- ..::  header area start ::.. -->
   <?= $this->include('./partials/header') ?>
    <!-- ..::  header area end ::.. -->
 
  <?= $this->include('./partials/slider') ?>
 <?= $this->include('./partials/content') ?>
    <!-- ..::  scripts  start ::.. -->
    <?= $this->include('./partials/script') ?>
  <!-- ..::  footer  start ::.. -->
        <?= $this->include('./partials/footer') ?>
        <!-- ..::  footer area end ::.. -->


    <?= $this->renderSection('./script') ?>
</body>
<script>
         
    </script>
</html>